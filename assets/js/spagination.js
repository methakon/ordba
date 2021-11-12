if(typeof this.NodeList.prototype.forEach != undefined )
{
    this.NodeList.prototype.forEach = Array.prototype.forEach;
}
class spagination
{
    
    constructor(perpage) {  
        
       this.perpage = perpage;
       this.contaner=document.getElementById("list_container");
       this.all_items = this.contaner.querySelectorAll(".article-3");
       this.paginator = document.getElementById("paginate_buttons");
       this.filter = document.getElementById('search_on');
       this.filtered_items=[];
       this.current_page=1;
       this.auther="SWARNA SEKHAR DHAR";
       this.max_pagination_button = 10;
       this.page_button_start=0;
       window.spagination=this;
       window.spagination.filter_items();
       window.spagination.filter.addEventListener("keyup",  window.spagination.filter_items);
       window.spagination.set_page(this.current_page);
       
       
    }
    generatebuttons(page_num=1)
    {
       var me=window.spagination;
       
       me.paginator.innerHTML="";
       me.total_buttons = Math.ceil(me.filtered_items.length / me.perpage);
       var i;
        me.page_button_start= (page_num <= me.max_pagination_button ) ? 1 :(page_num - me.max_pagination_button+1);
      //  alert(me.page_button_start +"-"+me.filtered_items.length+"pp:"+ me.perpage+"tb:"+me.total_buttons)
       if(page_num >= me.max_pagination_button )
       {
            var li = document.createElement('li');
            li.setAttribute('class','page-item');
            var prevp= (page_num <= me.max_pagination_button) ? 1 : (parseInt(page_num) - 1);
            li.setAttribute('page',prevp);
            li.innerHTML= '<a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a>';
            li.addEventListener("click", function() {
                     me.set_page(this.getAttribute('page'));
            });
            me.paginator.appendChild(li); 
        }
         var cmaxb=((me.max_pagination_button + (me.page_button_start-1)) > me.total_buttons) ? me.total_buttons : (me.max_pagination_button+me.page_button_start-1);
          
        for (i = me.page_button_start-1; i < (cmaxb) ; i++) {
            var li = document.createElement('li');
            var cpage = i+1;
           
            if(cpage == page_num)
            {
               //  alert(cpage+"--"+page_num);
                li.setAttribute('class','page-item active');
            }
            else
            {
                li.setAttribute('class','page-item');
            }
            
            li.setAttribute('page',cpage);
            li.innerHTML= '<a class="page-link" href="#">'+cpage+'</a>';
            li.addEventListener("click", function() {
                //$( ".page-item" ).removeClass( "active" );
               // $( this ).addClass( "active" );
                     me.set_page(this.getAttribute('page'));
            });
             me.paginator.appendChild(li); 
            }
            if(page_num < me.total_buttons )
            {
                 li = document.createElement('li');
                 li.setAttribute('class','page-item');
               //  alert(me.page_button_start+"--"+page_num);
                 var nextp= page_num < me.total_buttons ? (parseInt(page_num) + 1) : me.max_pagination_button;

                 li.setAttribute('page', nextp );
                 li.innerHTML= '<a class="page-link" href="#"> next<i class="fas fa-angle-right"></i></a>';
                 li.addEventListener("click", function() {
                     me.page_button_start= (me.current_page <= me.max_pagination_button-1) ? 0 :(me.current_page-me.max_pagination_button)+1;
                    // alert(this.getAttribute('page'));
                     me.set_page(this.getAttribute('page'));

                 });
                 me.paginator.appendChild(li); 
             }
    }
    set_page(page_num)
    {
        var me=window.spagination;
        me.current_page=page_num > 0 ? page_num : 1;
           
        
        
        me.generatebuttons(page_num);
        me.all_items.forEach(function(rl){
             $(rl).removeClass( "d-flex" ).hide();
        });
       
        var idx=1;
        //console.log(window.spagination.filtered_items);
        me.filtered_items.forEach(function(rl){
             
             if(me.current_page == 1 &&  idx <= me.perpage )
             {
                // console.log(rl );
                  $(rl).addClass( "d-flex" ).show();
                 
             }
             
             if( me.current_page > 1 && idx <= (me.perpage * me.current_page) && idx > (me.perpage * (me.current_page - 1 )))
             {
                // console.log(rl);
                 $(rl).addClass( "d-flex" ).show();
                 
             }
            
             idx++;
         });
    }
    filter_items()
    {
       var me =window.spagination;
        if(typeof this.value != "undefined"){
            me.filter_on=this.value.toLowerCase();
        }
        else
        {
             if(typeof me.filter.value != "undefined"){
            me.filter_on=me.filter.value.toLowerCase();
             }
        }
        if(me.filter_on != "")
        {
            var idx=1;
            me.filtered_items=[];
            me.all_items.forEach(function(rl){
                var temp = document.createElement("div");
                temp.innerHTML = rl.innerHTML;
                var txt= temp.textContent || temp.innerText || "";
                txt = txt.toLowerCase();
                var n = txt.search(me.filter_on);
               if(n >= 0)  
               {
                   me.filtered_items.push(rl);
               }
            });
        }
        if(me.filter_on=="")
        {
            me.filtered_items = me.all_items;
        }
        me.page_button_start=0;
        me.set_page(1);
    }
}