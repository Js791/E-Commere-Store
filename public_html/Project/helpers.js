function flash(message = "", color = "info") {
    let flash = document.getElementById("flash");
    //create a div (or whatever wrapper we want)
    let outerDiv = document.createElement("div");
    outerDiv.className = "row justify-content-center";
    let innerDiv = document.createElement("div");

    //apply the CSS (these are bootstrap classes which we'll learn later)
    innerDiv.className = `alert alert-${color}`;
    //set the content
    innerDiv.innerText = message;

    outerDiv.appendChild(innerDiv);
    //add the element to the DOM (if we don't it merely exists in memory)
    flash.appendChild(outerDiv);
    //l
}//profile viewing also something for bootstrapping

function add_item(product_id) 
{
    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = () =>
    {
        if(xhttp.readyState ==4)
        {
            if(xhttp.status === 200)
            {
                let data = JSON.parse(xhttp.responseText);
                console.log("data recieved",data);
                flash(data.message,"success");
            } 
        }
    }
    xhttp.open("POST","api/add_to_cart.php",true);
    let data = 
    {
        product_id:product_id,
        quantity:1,
    }
    let q = Object.keys(data).map(key => key + '=' + data[key]).join('&');
    xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhttp.send(q);
}

