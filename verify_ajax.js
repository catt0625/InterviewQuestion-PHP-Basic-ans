function validateUserName() {
    if(preg_match('abc')) {
      return true;
    }
    return false;
  }


  $.ajax({  
    type: 'POST',  
    url: 'info.php', 
    data: { album: this.title },
    success: function(response) {
        content.html(response);
    }
});