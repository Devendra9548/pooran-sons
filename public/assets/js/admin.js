$('.admin-navbar ul li').click(function() {
      // Remove the "active" class from all list items
      $('.admin-navbar ul li').removeClass('active');

      // Add the "active" class to the clicked list item
      $(this).addClass('active');
});