    $(document).ready(function(){
        $('#searchData').keyup(function() {
            var searchVal = $(this).val();
            if(searchVal !== '') {
                $.get('data/search-data.php?searchData='+searchVal, function(returnData) {
                    if (returnData === 'empty') {
                        $('#results').html('<td colspan="8">No hay coincidencias.</td>');
                    } else {
                        $('#results').html(returnData);
                    }
                });
            }
            else{
                searchVal = 'resetTable';
                $.get('data/search-data.php?searchData='+searchVal, function(returnData) {
                    $('#results').html(returnData);
                });
            }

        });

    });