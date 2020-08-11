$(function(){
	$(".dropdown-item").click(function(){
		var icon_text =$(this).html();
		$(".dropdown-toggle").html(icon_text);
	})
})

$(function(){
	$("[data-trigger]").on("click",function(){
		var targeet_id =$(this).attr("data-trigger");
		$(targeet_id).toggleClass("show");
		$("body").toggleClass("offcanvas-active")
	});
	$(".btn-close").click(function(e){
		$(".navbar-collapse").removeClass("show");
		$("body").removeClass("offcanvas-active");
	});
});





let id = $("input[name*='Event_id']")
id.attr("readonly","readonly");
$(".btnedit").click(e=>{
	
 let textvalues=displayData(e);
		
	let e_name = $("input[name*='name']");
	let e_date = $("input[name*='event_date']");
	let e_time = $("input[name*='event_time']");
	let e_descr = $("input[name*='description']");
	let e_image = $("input[name*='imgage']");
	let e_capacity = $("input[name*='capacity']");
	let e_email = $("input[name*='email']");
	let e_phone= $("input[name*='phone']");
	let e_address = $("input[name*='address']");
	let e_city = $("input[name*='city']");
	let e_postal = $("input[name*='postal_code']");
	let e_type = $("input[name*='type']");
	let e_url = $("input[name*='url']");

	id.val(textvalues[0]);
	e_name.val(textvalues[1]);
	e_date.val(textvalues[2]);
	e_time.val(textvalues[3]);
	e_image.val(textvalues[4]);
	e_descr.val(textvalues[6]);
	e_city.val(textvalues[11]);
	e_capacity.val(textvalues[7]);
	e_url.val(textvalues[5]);
	e_email.val(textvalues[8]);
	e_phone.val(textvalues[9]);
	e_address.val(textvalues[10]);
	e_postal.val(textvalues[12]);
	e_type.val(textvalues[13]);

	console.log(textvalues[5]);

});

function displayData(e) {
	
	let id = 0;
    const td = $("#tbody tr td");
    let textvalues = [];

    for (const value of td){
       if(value.dataset.id==e.target.dataset.id){
       	

       	textvalues[id++]=value.innerHTML.replace("<img id=\"img-admin\" src=\"","").replace("\">","");

       }
 
	}
	return textvalues;
}