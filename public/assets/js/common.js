function searchFilter(){
    var base_url =  $('meta[name="base_url"]').attr('content');
    var filterType = $("#filter").val();
    var searchValue = $("#search_value").val();
   
    if(filterType !== '' && searchValue !== '' && filterType != null){
      window.location.href = base_url+"/users-list?filter_type="+filterType+"&search_value="+searchValue;
    }
  return false;
}

