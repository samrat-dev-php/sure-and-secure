jQuery(".MLM .dropdown").removeClass("dropdown").addClass("mydropdown"),jQuery(".MLM .dropdown-menu").removeClass("dropdown-menu").addClass("mydropdown-menu"),jQuery(".mydropdown a[data-toggle]").removeAttr("data-toggle"),jQuery(".mydropdown a.dropdown-toggle").on("click",function(o){o.preventDefault();var e=jQuery(this).parent("li");jQuery(e).toggleClass("open ")}),jQuery.noConflict();