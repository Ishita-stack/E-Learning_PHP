$(document).ready(function(){  
  var $dropdownElements = $("[data-dropdown]");
  var dropdowns = {};
  
  $dropdownElements.each(function (index) {
    var dropdown = { element: $(this) };
    
    dropdown.button = dropdown.element.find("[data-dropdown-button]");
    dropdown.items = dropdown.element.find("[data-dropdown-list]");
    dropdowns[index] = dropdown;
    
    dropdown.button.click(function(e) {
      e.preventDefault();
      e.stopPropagation();
      
      var dropdownBreakpoint = $(window).width() < 401;
      
      var list = dropdown.items;
      var button = dropdown.button;
      var $allLists = $("[data-dropdown-list]");
      var listActive = list.hasClass("active");
      var listUp = list.hasClass("appears-top");
      var listRight = list.hasClass("appears-right");
      var sendUp = (list.outerHeight() * -1);
      var sendLeft = ((list.outerWidth() * -1) + button.outerWidth());
      
      if (listActive) {
        list.removeClass("active").fadeOut();
      } else if (listUp && listRight) {
        list.css({"top": sendUp, "left": sendLeft});
        $allLists.hide();
        list.addClass("active").fadeIn();
        
        if (dropdownBreakpoint) {
          list.css({top: 0, left: 0});
        }
      } else if (listUp) {
        list.css("top", sendUp);
        $allLists.hide();
        list.addClass("active").fadeIn();
        
        if (dropdownBreakpoint) {
          list.css("top", 0);
        }
      } else if (listRight) {
        list.css("left", sendLeft);
        $allLists.hide();
        list.addClass("active").fadeIn();
        
        if (dropdownBreakpoint) {
          list.css("left", 0);
        }
      } else {
        $allLists.hide();
        list.addClass("active").fadeIn();
      };
    });
  });
  
  $(document).click(function(k) {
    var target = $(k.target);
    var dropdownList = $("[data-dropdown-list]");
    
    if (target.is(dropdownList)) {
      return;
    } else {
      dropdownList.removeClass("active");
      dropdownList.fadeOut();
    };
  });
});