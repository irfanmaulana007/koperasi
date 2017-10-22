/*   
Template Name: Color Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.5
Version: 1.8.0
Author: Sean Ngu
Website: http://www.seantheme.com/color-admin-v1.8/admin/
    ----------------------------
        APPS CONTENT TABLE
    ----------------------------
    
    <!-- ======== GLOBAL SCRIPT SETTING ======== -->
    01. Handle Scrollbar
    
    02. Handle Sidebar - Menu
    03. Handle Sidebar - Mobile View Toggle
    04. Handle Sidebar - Minify / Expand
    05. Handle Page Load - Fade in
    06. Handle Panel - Remove / Reload / Collapse / Expand
    07. Handle Panel - Draggable
    08. Handle Tooltip & Popover Activation
    09. Handle Scroll to Top Button Activation
    
    <!-- ======== Added in V1.2 ======== -->
    10. Handle Theme & Page Structure Configuration
    11. Handle Theme Panel Expand
    12. Handle After Page Load Add Class Function - added in V1.2
    
    <!-- ======== Added in V1.5 ======== -->
    13. Handle Save Panel Position Function - added in V1.5
    14. Handle Draggable Panel Local Storage Function - added in V1.5
    15. Handle Reset Local Storage - added in V1.5
    
    <!-- ======== Added in V1.6 ======== -->
    16. Handle IE Full Height Page Compatibility - added in V1.6
    17. Handle Unlimited Nav Tabs - added in V1.6
    
    <!-- ======== Added in V1.7 ======== -->
    18. Handle Mobile Sidebar Scrolling Feature - added in V1.7
	
    <!-- ======== APPLICATION SETTING ======== -->
    Application Controller
*/



/* 01. Handle Scrollbar
------------------------------------------------ */
var handleSlimScroll = function() {
    "use strict";
    $('[data-scrollbar=true]').each( function() {
        generateSlimScroll($(this));
    });
};
var generateSlimScroll = function(element) {
    var dataHeight = $(element).attr('data-height');
        dataHeight = (!dataHeight) ? $(element).height() : dataHeight;
    
    var scrollBarOption = {
        height: dataHeight, 
        alwaysVisible: true
    };
    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        $(element).css('height', dataHeight);
        $(element).css('overflow-x','scroll');
    } else {
        $(element).slimScroll(scrollBarOption);
    }
};


/* 02. Handle Sidebar - Menu
------------------------------------------------ */
var handleSidebarMenu = function() {
    "use strict";
    $('.sidebar .nav > .has-sub > a').click(function() {
        var target = $(this).next('.sub-menu');
        var otherMenu = '.sidebar .nav > li.has-sub > .sub-menu';
    
        if ($('.page-sidebar-minified').length === 0) {
            $(otherMenu).not(target).slideUp(250, function() {
                $(this).closest('li').removeClass('expand');
            });
            $(target).slideToggle(250, function() {
                var targetLi = $(this).closest('li');
                if ($(targetLi).hasClass('expand')) {
                    $(targetLi).removeClass('expand');
                } else {
                    $(targetLi).addClass('expand');
                }
            });
        }
    });
    $('.sidebar .nav > .has-sub .sub-menu li.has-sub > a').click(function() {
        if ($('.page-sidebar-minified').length === 0) {
            var target = $(this).next('.sub-menu');
            $(target).slideToggle(250);
        }
    });
};


/* 03. Handle Sidebar - Mobile View Toggle
------------------------------------------------ */
var handleMobileSidebarToggle = function() {
    var sidebarProgress = false;
    $('.sidebar').on('click touchstart', function(e) {
        if ($(e.target).closest('.sidebar').length !== 0) {
            sidebarProgress = true;
        } else {
            sidebarProgress = false;
            e.stopPropagation();
        }
    });
    
    $(document).on('click touchstart', function(e) {
        if ($(e.target).closest('.sidebar').length === 0) {
            sidebarProgress = false;
        }
        if (!e.isPropagationStopped() && sidebarProgress !== true) {
            if ($('#page-container').hasClass('page-sidebar-toggled')) {
                sidebarProgress = true;
                $('#page-container').removeClass('page-sidebar-toggled');
            }
            if ($('#page-container').hasClass('page-right-sidebar-toggled')) {
                sidebarProgress = true;
                $('#page-container').removeClass('page-right-sidebar-toggled');
            }
        }
    });
    
    $('[data-click=right-sidebar-toggled]').click(function(e) {
        e.stopPropagation();
        var targetContainer = '#page-container';
        var targetClass = 'page-right-sidebar-collapsed';
            targetClass = ($(window).width() < 979) ? 'page-right-sidebar-toggled' : targetClass;
        if ($(targetContainer).hasClass(targetClass)) {
            $(targetContainer).removeClass(targetClass);
        } else if (sidebarProgress !== true) {
            $(targetContainer).addClass(targetClass);
        } else {
            sidebarProgress = false;
        }
        if ($(window).width() < 480) {
            $('#page-container').removeClass('page-sidebar-toggled');
        }
    });
    
    $('[data-click=sidebar-toggled]').click(function(e) {
        e.stopPropagation();
        var sidebarClass = 'page-sidebar-toggled';
        var targetContainer = '#page-container';

        if ($(targetContainer).hasClass(sidebarClass)) {
            $(targetContainer).removeClass(sidebarClass);
        } else if (sidebarProgress !== true) {
            $(targetContainer).addClass(sidebarClass);
        } else {
            sidebarProgress = false;
        }
        if ($(window).width() < 480) {
            $('#page-container').removeClass('page-right-sidebar-toggled');
        }
    });
};


/* 04. Handle Sidebar - Minify / Expand
------------------------------------------------ */
var handleSidebarMinify = function() {
    $('[data-click=sidebar-minify]').click(function(e) {
        e.preventDefault();
        var sidebarClass = 'page-sidebar-minified';
        var targetContainer = '#page-container';
        $('#sidebar [data-scrollbar="true"]').css('margin-top','0');
        $('#sidebar [data-scrollbar=true]').stop();
        if ($(targetContainer).hasClass(sidebarClass)) {
            $(targetContainer).removeClass(sidebarClass);
            if ($(targetContainer).hasClass('page-sidebar-fixed')) {
                if ($('#sidebar .slimScrollDiv').length !== 0) {
                    $('#sidebar [data-scrollbar="true"]').slimScroll({destroy: true});
                    $('#sidebar [data-scrollbar="true"]').removeAttr('style');
                }
                generateSlimScroll($('#sidebar [data-scrollbar="true"]'));
                $('#sidebar [data-scrollbar=true]').trigger('mouseover');
            } else if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                if ($('#sidebar .slimScrollDiv').length !== 0) {
                    $('#sidebar [data-scrollbar="true"]').slimScroll({destroy: true});
                    $('#sidebar [data-scrollbar="true"]').removeAttr('style');
                }
                generateSlimScroll($('#sidebar [data-scrollbar="true"]'));
            }
        } else {
            $(targetContainer).addClass(sidebarClass);
    
            if(!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                if ($(targetContainer).hasClass('page-sidebar-fixed')) {
                    $('#sidebar [data-scrollbar="true"]').slimScroll({destroy: true});
                    $('#sidebar [data-scrollbar="true"]').removeAttr('style');
                }
                $('#sidebar [data-scrollbar=true]').trigger('mouseover');
            } else {
                $('#sidebar [data-scrollbar="true"]').css('overflow', 'visible');
            }
        }
        $(window).trigger('resize');
    });
};


/* 05. Handle Page Load - Fade in
------------------------------------------------ */
var handlePageContentView = function() {
    "use strict";
    $.when($('#page-loader').addClass('hide')).done(function() {
        $('#page-container').addClass('in');
    });
};

/* 13. Handle Save Panel Position Function - added in V1.5
------------------------------------------------ */
var handleSavePanelPosition = function(element) {
    "use strict";
    if ($('.ui-sortable').length !== 0) {
        var newValue = [];
        var index = 0;
        $.when($('.ui-sortable').each(function() {
            var panelSortableElement = $(this).find('[data-sortable-id]');
            if (panelSortableElement.length !== 0) {
                var columnValue = [];
                $(panelSortableElement).each(function() {
                    var targetSortId = $(this).attr('data-sortable-id');
                    columnValue.push({id: targetSortId});
                });
                newValue.push(columnValue);
            } else {
                newValue.push([]);
            }
            index++;
        })).done(function() {
            var targetPage = window.location.href;
                targetPage = targetPage.split('?');
                targetPage = targetPage[0];
            localStorage.setItem(targetPage, JSON.stringify(newValue));
            $(element).find('[data-id="title-spinner"]').delay(500).fadeOut(500, function() {
                $(this).remove();
            });
        });
    }
};


/* 14. Handle Draggable Panel Local Storage Function - added in V1.5
------------------------------------------------ */
var handleLocalStorage = function() {
    "use strict";
    if (typeof(Storage) !== 'undefined') {
        var targetPage = window.location.href;
            targetPage = targetPage.split('?');
            targetPage = targetPage[0];
        var panelPositionData = localStorage.getItem(targetPage);
        
        if (panelPositionData) {
            panelPositionData = JSON.parse(panelPositionData);
            var i = 0;
            $('.panel').parent('[class*="col-"]').each(function() {
                var storageData = panelPositionData[i]; 
                var targetColumn = $(this);
                
                if (storageData) {
                    $.each(storageData, function(index, data) {
                        var targetId = '[data-sortable-id="'+ data.id +'"]';
                        if ($(targetId).length !== 0) {
                            var targetHtml = $(targetId).clone();
                            $(targetId).remove();
                            $(targetColumn).append(targetHtml);
                        }
                    });
                }
                i++;
            });
        }
    } else {
        alert('Your browser is not supported with the local storage'); 
    }
};


/* 15. Handle Reset Local Storage - added in V1.5
------------------------------------------------ */
var handleResetLocalStorage = function() {
    "use strict";
    $('[data-click=reset-local-storage]').live('click', function(e) {
        e.preventDefault();
        
        var targetModalHtml = ''+
        '<div class="modal fade" data-modal-id="reset-local-storage-confirmation">'+
        '    <div class="modal-dialog">'+
        '        <div class="modal-content">'+
        '            <div class="modal-header">'+
        '                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>'+
        '                <h4 class="modal-title"><i class="fa fa-refresh m-r-5"></i> Reset Local Storage Confirmation</h4>'+
        '            </div>'+
        '            <div class="modal-body">'+
        '                <div class="alert alert-info m-b-0">Would you like to RESET all your saved widgets and clear Local Storage?</div>'+
        '            </div>'+
        '            <div class="modal-footer">'+
        '                <a href="javascript:;" class="btn btn-sm btn-white" data-dismiss="modal"><i class="fa fa-close"></i> No</a>'+
        '                <a href="javascript:;" class="btn btn-sm btn-inverse" data-click="confirm-reset-local-storage"><i class="fa fa-check"></i> Yes</a>'+
        '            </div>'+
        '        </div>'+
        '    </div>'+
        '</div>';
        
        $('body').append(targetModalHtml);
        $('[data-modal-id="reset-local-storage-confirmation"]').modal('show');
    });
    $('[data-modal-id="reset-local-storage-confirmation"]').live('hidden.bs.modal', function() {
        $('[data-modal-id="reset-local-storage-confirmation"]').remove();
    });
    $('[data-click=confirm-reset-local-storage]').live('click', function(e) {
        e.preventDefault();
        var localStorageName = window.location.href;
            localStorageName = localStorageName.split('?');
            localStorageName = localStorageName[0];
        localStorage.removeItem(localStorageName);
        window.location.href = document.URL;
    });
};


/* 16. Handle IE Full Height Page Compatibility - added in V1.6
------------------------------------------------ */
var handleIEFullHeightContent = function() {
    var userAgent = window.navigator.userAgent;
    var msie = userAgent.indexOf("MSIE ");

    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
        $('.vertical-box-row [data-scrollbar="true"][data-height="100%"]').each(function() {
            var targetRow = $(this).closest('.vertical-box-row');
            var targetHeight = $(targetRow).height();
            $(targetRow).find('.vertical-box-cell').height(targetHeight);
        });
    }
};


/* 18. Handle Mobile Sidebar Scrolling Feature - added in V1.7
------------------------------------------------ */
var handleMobileSidebar = function() {
    "use strict";
    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        if ($('#page-container').hasClass('page-sidebar-minified')) {
            $('#sidebar [data-scrollbar="true"]').css('overflow', 'visible');
            $('.page-sidebar-minified #sidebar [data-scrollbar="true"]').slimScroll({destroy: true});
            $('.page-sidebar-minified #sidebar [data-scrollbar="true"]').removeAttr('style');
            $('.page-sidebar-minified #sidebar [data-scrollbar=true]').trigger('mouseover');
        }
    }

    var oriTouch = 0;
    $('.page-sidebar-minified .sidebar [data-scrollbar=true] a').live('touchstart', function(e) {
        var touch = e.originalEvent.touches[0] || e.originalEvent.changedTouches[0];
        var touchVertical = touch.pageY;
        oriTouch = touchVertical - parseInt($(this).closest('[data-scrollbar=true]').css('margin-top'));
    });

    $('.page-sidebar-minified .sidebar [data-scrollbar=true] a').live('touchmove',function(e){
        e.preventDefault();
        if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            var touch = e.originalEvent.touches[0] || e.originalEvent.changedTouches[0];
            var touchVertical = touch.pageY;
            var elementTop = touchVertical - oriTouch;
            
            $(this).closest('[data-scrollbar=true]').css('margin-top', elementTop + 'px');
        }
    });

    $('.page-sidebar-minified .sidebar [data-scrollbar=true] a').live('touchend', function(e) {
        var targetScrollBar = $(this).closest('[data-scrollbar=true]');
        var windowHeight = $(window).height();
        var sidebarTopPosition = parseInt($('#sidebar').css('padding-top'));
        var sidebarContainerHeight = $('#sidebar').height();
        oriTouch = $(targetScrollBar).css('margin-top');

        var sidebarHeight = sidebarTopPosition;
        $('.sidebar').not('.sidebar-right').find('.nav').each(function() {
            sidebarHeight += $(this).height();
        });
        var finalHeight = -parseInt(oriTouch) + $('.sidebar').height();
        if (finalHeight >= sidebarHeight && windowHeight <= sidebarHeight && sidebarContainerHeight <= sidebarHeight) {
            var finalMargin = windowHeight - sidebarHeight - 20;
            $(targetScrollBar).animate({marginTop: finalMargin + 'px'});
        } else if (parseInt(oriTouch) >= 0 || sidebarContainerHeight >= sidebarHeight) {
            $(targetScrollBar).animate({marginTop: '0px'});
        } else {
            finalMargin = oriTouch;
            $(targetScrollBar).animate({marginTop: finalMargin + 'px'});
        }
    });
};


/* Application Controller
------------------------------------------------ */
var App = function () {
	"use strict";
	
	return {
		//main function
		init: function () {
		
		    // draggable panel & local storage
		    handleLocalStorage();
		    handleResetLocalStorage();
		
			// slimscroll
			handleSlimScroll();
			
			// sidebar
			handleSidebarMenu();
			handleMobileSidebarToggle();
			handleSidebarMinify();
			handleMobileSidebar();
			
			// theme configuration
			handlePageContentView();
			
			// IE Compatibility
			handleIEFullHeightContent();
		}
  };
}();