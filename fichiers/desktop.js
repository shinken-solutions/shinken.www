/* This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at http://mozilla.org/MPL/2.0/. */
;(function(w, $, TweenMax, TimelineLite, Power2, Quad) {
    'use strict';

    var $article_wrapper = $('#article-wrapper');
    var article_height = 820;
    var parallax_offset = 142;

    var phone_offset = 200; // still useful
    var $overview = $('#overview');
    var $os = $('#os');
    var $marketplace = $('#marketplace');
    var $android = $('#android');
    var $cloud = $('#cloud');

    var virtual_page;
    var scroll_tracking = true;

    var scroll_track = function(url) {
        if (scroll_tracking) {
            // bit of a hack to standardize tracking
            if (url === 'overview/') {
                url = '';
            }
	    
        }
    };

    var activate_nav_item = function(active_id) {
        $('#partner-menu li').removeClass('active');
        $('#partner-menu li[id="menu-' + active_id + '"]').addClass('active');
    };

    activate_nav_item('overview');

    // Smooth scroll-to for left menu navigation
    // WAS #partner-menu a, #nav-main-menu a, a.nav
    $('#partner-menu a, a.nav').click(function(e) {
        var elementClicked = $(this).attr("href");
        var destination;

        // all <article>'s have set height and position
        switch (elementClicked) {
            case '#overview':
                destination = 0;
                break;
            case '#os':
                destination = (article_height - parallax_offset);
                break;
            case '#marketplace':
                destination = ((article_height * 2) - (parallax_offset * 2));
                break;
            case '#android':
                destination = ((article_height * 3) - (parallax_offset * 3));
                break;
	    case '#cloud':
                destination = ((article_height * 4) - (parallax_offset * 4));
                break;
        }

        // force all first sections to be current
        $('.partner-article').each(function(i, article) {
            $(article).attr('data-section', $(article).find('section:first').attr('id'));
            $(article).find('section').each(function(j, section) {
                $(section).css('left', (j * 100) + '%').attr('data-current', ((j === 0) ? 1 : 0));
            });
        });

        // make sure scroll tracking doesn't happen while animating scroll position with buttons
        scroll_tracking = false;

        // slow-ish scrolling to make scroll animation life easier
        $("html:not(:animated),body:not(:animated)").animate({ scrollTop: destination }, 1000, function() {
            scroll_tracking = true;
        });

        virtual_page = (elementClicked !== '#overview') ? elementClicked.replace(/#/, '') + '/' : '';
	
        return false;
    });

    // if hash changes, make sure parallax doesn't go haywire
    var _handle_hash = function() {
        if (w.location.hash !== '') {
            $article_wrapper.animate({ scrollTop: 0 }, 50, function() {
                if (w.location.hash === 'location' || w.location.hash === 'schedule') {
                    $('a.modal[href="#' + w.location.hash + '"]:first').trigger('click');
                } else {
                    $('#partner-nav a[href="' + w.location.hash + '"]').trigger('click');
                }

                w.location.hash = '';
            });
        }
    };

    // fix for loading page with anchor in URL
    $(function() {
        setTimeout(function() {
            _handle_hash();
        }, 60); // may need to increase timeout?
        // ease flicker when loading hash/content
        setTimeout(function() {
            $article_wrapper.animate({ opacity: 1}, 'fast');
            //$phone.show();
        }, 150);
    });

    $(w).on('hashchange', function() {
        _handle_hash();
    });


    // re-arrange news, partner button, & links if #overview
    var $overview_news = $('#overview-news').detach();
    $('#more-partners').after($overview_news);
    $overview_news.fadeIn('fast');

    var $overview_actions= $('#overview .overview-actions').detach();
    $('#overview-news').after($overview_actions);
    $overview_actions.fadeIn('fast');

    var $overview_partner= $('#overview .partner-button').detach();
    $('#overview .partner-logos').after($overview_partner);
    $overview_partner.fadeIn('fast');

 
    // side scrolling sections
    $('.view-section').on('click', function(e) {
        e.preventDefault();

        // needed to calculate percentage offsets?
        var doc_width = $(w.document).width();

        var link = $(this);

        var article = link.parents('article:first');

        // which section is currently displayed?
        var orig = article.find('section[data-current="1"]:first');
        var orig_pos = Number(orig.data('pos'));

        // which section are we going to?
        var dest = $('#' + link.data('section'));
        var dest_pos = Number(dest.data('pos'));

        // what's the difference in position? multiply by 100 to get percentage
        var delta = (dest_pos - orig_pos) * 100;

        article.find('section').each(function(i, el) {
            var section = $(el);

            // percentage position of this section
            // (left will be in px and will be multiple of doc_width)
            var el_left = (section.position().left/doc_width) * 100;

            // make sure we round to the nearest 100
            var new_left = Math.round((el_left - delta)/100)*100;

            section.css('left', new_left + '%').attr('data-current', 0);
        });

        // update current section
        dest.attr('data-current', 1);

        // update parent article selector
        article.attr('data-section', dest.attr('id'));

        // which phone should we move?
        //var $cur_phone = (article.attr('id') === 'android') ? $phone_android : $phone;

        // track section view
        virtual_page = article.attr('id') + '/';

        // only add sub-section id if not in first position
        if (dest_pos > 1) {
            virtual_page += dest.attr('id') + '/';
        }

        //w.ga_track(virtual_page);
    });

    // show/hide phone shade and set phone screen contents
    var _refresh_phone = function(to_slide, shadowinout) {
        var shadow = to_slide.find('.phone-shadow');
        if (shadowinout === 'in') {
            shadow.addClass('visible');
        } else {
            shadow.removeClass('visible');
        }

        var $visible = $('.screen:visible:first');

        if ($visible.attr('id') !== ('screen-' + to_slide.attr('id'))) {
            $('#screen-' + to_slide.attr('id')).fadeIn('fast', function() {
                $visible.hide();
            });
        }
    };

    // pretty complex function to move phone with scrolling/click nav
    var _move_phone = function(factor, slide, new_z) {
        // fade out all phone shadows
        //$phone_shadows.removeClass('visible');

        // set current article for inherited body styles
        $('body').attr('data-article', slide.attr('id'));

        // set active left menu item
        activate_nav_item(slide.attr('id'));

        // calculate new top position for phone
        var top_pos = ((article_height * factor) - (parallax_offset * factor)) + phone_offset;

        // scrolling to android slide should never affect standard phone's left or z-index
        if (slide.attr('id') === 'android') {
        } else {
            // would like to abstract this more, but each scenario requires specific sequencing

            // if going to the first section in an article, phone should end up in viewport
            // only need to track root article
            if (Number(slide.find('section:first').attr('data-current')) === 1) {
            // if moving to a sub-section of article, phone should end up off
            // screen to the left. track article and sub-section
            } else {
                // if phone is visible, animate nicely off to the left, then
                // change top position
                virtual_page = slide.attr('id') + '/' + slide.find('section[data-current="1"]:first').attr('id') + '/';

                if (visible) {
                    _refresh_phone(slide, 'out');

                // if phone is not visible, just change top position
                } else {
                    _refresh_phone(slide, 'out');

                    scroll_track(virtual_page);
                }
            }
        }
    };

    // set up parallax tweening
    var controller = $.superscrollorama();

    var tweens = {};

    // generic tween used for most article content
    tweens.slide_up = {
        from: {
            css: { top: (('ontouchstart' in w.document.documentElement) ? 0 : 120), opacity: (('ontouchstart' in w.document.documentElement) ? 1 : 0) },
            immediateRender: true
        },
        to: { css: { top: 0, opacity: 1 } }
    };

    // article specific tweens
    tweens.article_overview = {
        from: {
            css: { top: 0 },
            immediateRender: true
        },
        to: {
            css: { top: 0 },
            onReverseComplete: function() {
                _move_phone(0, $overview);
            }
        }
    };

    tweens.article_os = {
        from: {
            css: { top: 0, ease: Power2.easeOut },
            immediateRender: true
        },
        to: {
            css: { top: (parallax_offset*-1) },
            onStart: function() {
                //$phone.css('z-index', 110);
            },
            onComplete: function() {
                _move_phone(1, $os);
            }
        }
    };

    tweens.article_marketplace = {
        from: {
            css: { top: (parallax_offset*-1), ease: Power2.easeOut },
            immediateRender: true
        },
        to: {
            css: { top: (parallax_offset*-2) },
            onStart: function() {
                //$phone.css('z-index', 120);
            },
            onComplete: function() {
                _move_phone(2, $marketplace);
            },
            onReverseComplete: function() {
                _move_phone(1, $os, 110);
            }
        }
    };

    tweens.article_android = {
        from: {
            css: { top: (parallax_offset*-2), ease: Power2.easeOut },
            immediateRender: true
        },
        to: {
            css: { top: (parallax_offset*-3) },
            onComplete: function() {
                _move_phone(3, $android);
                //$phone_android.addClass('android-phone-visible');
            },
            onReverseComplete: function() {
                _move_phone(2, $marketplace);
                //$phone_android.removeClass('android-phone-visible');
            }
        }
    };


    tweens.article_cloud = {
        from: {
            css: { top: (parallax_offset*-3), ease: Power2.easeOut },
            immediateRender: true
        },
        to: {
            css: { top: (parallax_offset*-4) },
            onComplete: function() {
                _move_phone(3, $cloud);
                //$phone_android.addClass('android-phone-visible');
            },
            onReverseComplete: function() {
                _move_phone(2, $android);
                //$phone_android.removeClass('android-phone-visible');
            }
        }
    };



    var prev_article = '#overview';

    // set up tweens for contents of each article (except #overview)
    $('.partner-article').each(function(i, article) {
        var $article = $(article);

        var my_tweens = [], tween, $tweener;

        // #overview takes longer so it finishes last - needed to handle super
        // fast scrolling upwards
        var dur = ($article.attr('id') === 'overview') ? 1.6 : 0.5;

        tween = TweenMax.fromTo(
            $article,
            dur,
            tweens['article_' + $article.attr('id')].from,
            tweens['article_' + $article.attr('id')].to
        );

        my_tweens.push(tween);

        // build tween for each element in $article with class of tween
        $article.find('.tween').each(function(i, tweener) {
            $tweener = $(tweener);

            tween = TweenMax.fromTo(
                $tweener,
                0.6,
                tweens.slide_up.from,
                tweens.slide_up.to
            );

            my_tweens.push(tween);
        });

        if (my_tweens.length > 0) {
            // execute tween when previous article is 600px from being out of viewport
            controller.addTween(
                prev_article,
                (new TimelineLite()).append(my_tweens),
                300, // scroll duration
                600 // start offset
            );
        }

        if ($article.attr('id') !== 'overview') {
            prev_article = '#' + $article.attr('id');
        }
    });
})(window, window.jQuery, window.TweenMax, window.TimelineLite, window.Power2, window.Quad);
