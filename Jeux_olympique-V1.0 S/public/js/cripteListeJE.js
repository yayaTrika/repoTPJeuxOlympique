/**
 * Created by Haby DIANKA on 15/03/2018.
 */

    $(document).ready(function () {
        $(document).on('')
        $('#choix').change(function () {

            chargement();

        });

        function chargement()
        {
            var value = $('#choix option:selected').val();

            if(value != "")
            {
                $.post('scripte',{value:value}, function (data) {

                    $("#msg").html(data);
                });
            }
            else
            {

                $("#msg").html("<h1>  </h1>");
            }
        }
    });