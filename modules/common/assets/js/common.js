
function create_page(now_page,total_page,args){
    var i;
    var html= '<ul class="pagination">';

    if(total_page<8){
        for(i=1;i<=total_page;i++){
            if(now_page == i){
                html += '<li class="paginate_button page-item active">';

            }else{
                html += '<li class="paginate_button page-item">';
            }

            html += '<a href="?page=' + i + args + '" aria-controls="basic-datatables"  class="page-link">' + i + '</a>';
            html += '</li>';
        }
    }
    if(total_page>=8 && now_page<=4){
        for(i=1;i<=7;i++){
            if(now_page == i){
                html += '<li class="paginate_button page-item active">';

            }else{
                html += '<li class="paginate_button page-item">';
            }

            html += '<a href="?page=' + i + args + '" aria-controls="basic-datatables"  class="page-link">' + i + '</a>';
            html += '</li>';
        }
    }
    if(now_page>4 && total_page>=8 && total_page-now_page>3){
        for(i=now_page-3;i<=now_page+3;i++){
            if(now_page == i){
                html += '<li class="paginate_button page-item active">';

            }else{
                html += '<li class="paginate_button page-item">';
            }

            html += '<a href="?page=' + i + args + '" aria-controls="basic-datatables"  class="page-link">' + i + '</a>';
            html += '</li>';
        }
    }
    if( total_page>=8 && now_page>4 && total_page-now_page<=3){
        for(i=total_page-6;i<=total_page;i++){
            if(now_page == i){
                html += '<li class="paginate_button page-item active">';

            }else{
                html += '<li class="paginate_button page-item">';
            }

            html += '<a href="?page=' + i + args + '" aria-controls="basic-datatables"  class="page-link">' + i + '</a>';
            html += '</li>';
        }
    }

    html += '</ul>';

    $("#page").append(html);

}

