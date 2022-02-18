function hate() {
    var e = document.getElementById("url").value.substring(17, 28);
    fetch(`https://www.googleapis.com/youtube/v3/videos?part=snippet&id=${e}&type=video&key={API-KEY}) //Enter API Key - Get it from GoogleAPI
        .then((e) => e.json())
        .then((e) => {
            console.log(e);
            for (var t = e.items[0].snippet.tags, o = 0; o < t.length; o++) console.log(o + 1 + ". " + t[o]), (document.getElementById("tags").innerHTML = t);
        });
}
function love() {
    var e = document.getElementById("url").value.split("v=")[1];
    fetch(`https://www.googleapis.com/youtube/v3/videos?part=snippet&id=${e}&type=video&key={API-KEY}) //Enter API Key - Get it from GoogleAPI
        .then((e) => e.json())
        .then((e) => {
            console.log(e);
            for (var t = e.items[0].snippet.tags, o = 0; o < t.length; o++) console.log(o + 1 + ". " + t[o]), (document.getElementById("tags").innerHTML = t);
        });
}
function my() {
    love(), hate();
}
function myFunction() {
    var e = document.getElementById("tags");
    e.select(), e.setSelectionRange(0, 99999), navigator.clipboard.writeText(e.value), alert("Copied the text: " + e.value);
}
