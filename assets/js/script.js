const wm = $('img[alt="www.000webhost.com"]').parents("div");
console.log(wm.attr("style"));
wm.remove();
