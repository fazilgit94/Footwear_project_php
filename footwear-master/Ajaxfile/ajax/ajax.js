$(document).on("click","#add",function()
{

data =$('#user-form').serialize();

console.log(data)
jQuery.ajax({
    data: data,
    type: "post",
    url: "http://localhost/MVC/footwear-master/Ajaxfile/database/save.php",

    success:function (result){
    console.log(result)
    console.log(JSON.parse(result))

    dataResult = JSON.parse(result);
    console.log(dataResult.status)

    if(dataResult.status ==200)
    {
        
        $('#addModal').hide();
        alert("data added..!");
        window.location.reload();

    }
}
})



})