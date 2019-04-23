
//Our method to make our ajax web request:
function makeHttpRequest(ajaxURLGetComponents)
{
  CompleteURL = "ajax.php/?" + ajaxURLGetComponents;
  Http = new XMLHttpRequest();
  Http.open("GET", CompleteURL);
  Http.send();
  //On the page being sent it console logs the response from the page. This can be seen on your browser
  //by right clicking the page and inspecting it!
  Http.onreadystatechange=function(){
    if (this.readyState == 4 && this.status==200)
    {
      console.log(Http.responseText);
    }
  };
}



document.addEventListener('DOMContentLoaded', function()
{
    //Handles feedback of button 1 being clicked
    document.getElementById("button1").addEventListener('click',function ()
    {
      if (document.getElementById("button1").classList.contains("btn-secondary")) //Turns button1 to on state!
      {
        document.getElementById("button1").classList.remove("btn-secondary");
        document.getElementById("button1").classList.add("btn-primary");
        makeHttpRequest("button1Pushed=2");
      }
      else {  //Turns button1 to off state!
        document.getElementById("button1").classList.remove("btn-primary");
        document.getElementById("button1").classList.add("btn-secondary");
        makeHttpRequest("button1Pushed=1");
      }
    });

    //Handles feedback of button 2 being clicked
    document.getElementById("button2").addEventListener('click',function ()
    {
      if (document.getElementById("button2").classList.contains("btn-secondary"))  //Turns button2 to on state!
      {
        document.getElementById("button2").classList.remove("btn-secondary");
        document.getElementById("button2").classList.add("btn-primary");
        makeHttpRequest("button2Pushed=2");
      }
      else {  //Turns button2 to off state!
        document.getElementById("button2").classList.remove("btn-primary");
        document.getElementById("button2").classList.add("btn-secondary");
        makeHttpRequest("button2Pushed=1");
      }
    });

    //Handles feedback of button 3 being clicked
    document.getElementById("button3").addEventListener('click',function ()
    {
      if (document.getElementById("button3").classList.contains("btn-secondary")) //Turns button3 to on state!
      {
        document.getElementById("button3").classList.remove("btn-secondary");
        document.getElementById("button3").classList.add("btn-primary");
        makeHttpRequest("button3Pushed=2");
      }
      else { //Turns button3 to off state!
        document.getElementById("button3").classList.remove("btn-primary");
        document.getElementById("button3").classList.add("btn-secondary");
        makeHttpRequest("button3Pushed=1");
      }
    });

    //Handles feedback of button 4 being clicked
    document.getElementById("button4").addEventListener('click',function () //Turns button4 to on state!
    {
      if (document.getElementById("button4").classList.contains("btn-secondary"))
      {
        document.getElementById("button4").classList.remove("btn-secondary");
        document.getElementById("button4").classList.add("btn-primary");
        makeHttpRequest("button4Pushed=2");
      }
      else { //Turns button4 to off state!
        document.getElementById("button4").classList.remove("btn-primary");
        document.getElementById("button4").classList.add("btn-secondary");
        makeHttpRequest("button4Pushed=1");
      }
    });
});
