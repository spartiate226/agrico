
if($("#q-cat")){
    var urlcat=$("#q-cat").attr('data-edit');
    var asset=$("#q-cat").attr('data-asset');
    $("#q-cat").keyup(function () {
        var oldbody=$("#catbody").html();
        var newbody="";
        if($(this).val()!=" "){
            $.get($(this).attr('data-catsearch')+"?q="+$(this).val()).done(function (data) {
                var categories=JSON.parse(data.categories);
            
                for (const key in categories) {
                    newbody+="<tr>\n" +
                        '                        <td>'+categories[key].id+'</td>'+
                        '                        <td>'+categories[key].nom+'</td>'+
                        '                        <td>' +
                                                '<a href="'+urlcat+'/'+categories[key].id+'/edit" class="badge badge-success">Modifier</a>' +
                        '                            <form class="d-inline" action="'+urlcat+'/'+categories[key].id+'" method="POST">' +
                        '                          <input type="hidden" name="_token" value="'+$("#token").attr('content')+'">'+
                        '                              <input type="hidden" name="_method" value="DELETE">'+
                        '                                <button class="badge badge-danger">Supprimer</button>'+
                        '                            </form>'+
                        '                        </td>'+
                        '                    </tr>'
                }
                $("#catbody").html(newbody);
            })
        }else{
            $("#catbody").html(oldbody);
        }
    })
}


if($("#q-prod")){
    var urlprod=$("#q-prod").attr('data-edit');
    var asset=$("#q-prod").attr('data-asset');
    $("#q-prod").keyup(function () {
        var prodoldbody=$("#prodbody").html();
        var prodnewbody="";
        if($(this).val()!=" "){
            $.get($(this).attr('data-prodsearch')+"?q="+$(this).val()).done(function (data) {
                var produits=JSON.parse(data.produits);
                for (const key in produits) {
                    prodnewbody+='<tr>\n' +
                        '                <td>'+produits[key].id+'</td>\n' +
                        '                <td>'+produits[key].nom+'</td>\n' +
                        '                <td>'+produits[key].prix+'</td>\n' +
                        '                <td>voir detail</td>\n' +
                        '                <td>'+produits[key].description+'</td>\n' +
                        '                <td>\n' +
                        '                    <a href="'+urlprod+'/'+produits[key].id+'/edit" class="badge badge-pill badge-success">Modifier</a>\n' +
                        '                    <form class="d-inline" action="'+urlprod+'/'+produits[key].id+'" method="Post">\n' +
                        '                        <input type="hidden" name="_token" value="'+$("#token").attr('content')+'">' +
                        '                        <input type="hidden" name="_method" value="DELETE">' +
                        '                        <button class="badge badge-pill badge-danger">Supprimer</button>\n' +
                        '                    </form>\n' +
                        '                </td>\n' +
                        '            </tr>';
                }
                $("#prodbody").html(prodnewbody);
            })
        }else{

            $("#prodbody").html(prodoldbody);
        }
    })
}
