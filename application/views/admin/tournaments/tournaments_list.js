
	$(document).ready(function () {

		//delete

        $(".delete").click(function() {

          var ajax_id = $(this).attr('id');
          var row = $(this).closest('tr');

          apprise('Are you sure want to delete this tournaments?', {'verify':true}, function(r)
          {
            if(r)
            {
                deleteAjax(ajax_id,row);
            }
            else
            {
                return false;
            }
          });

        });

        function deleteAjax(id,row)
        {
            $.ajax({
                type: "POST",
                url: config.base_url + 'tournaments/ajax_delete_tournaments',
                dataType: 'text',
                data : {
                    tournaments_id : id,
                },
                success : function(data) {
                    if(data=='1')
                    {
                        var oTable = $('#dt_d').dataTable();

                        var pos = oTable.fnGetPosition(row.get(0));

                        oTable.fnDeleteRow(pos);

                        apprise('The tournaments has been deleted');
                    }
                    else if(data=='2')
                    {
                        apprise('Error.');
                    }
                    else
                    {
                        apprise('Error.');
                    }
                },
                error : function(XMLHttpRequest, textStatus, errorThrown) {
                    alert(XMLHttpRequest + " : " + textStatus + " : " + errorThrown);
                }
            });
        }

	});

		