var jsc = Cookies.noConflict();

// search all the user-already-liked imgs and hearted them
var getLikesCount = function () {
  var cookies = jsc.get();

  // if cookies, for this page, are set
  if (!jQuery.isEmptyObject(cookies)) {
    var imgID, key, isLiked;

    $(".img-likes").each(function (index) {
      imgID = $(this).data("attachid");
      key = "img_" + imgID;
      // True if the current img is liked and stored as cookie
      isLiked = jsc.get(key) || undefined;

      if (isLiked) {
        $(this).find("i").toggleClass("fa-heart-o fa-heart");
      }
    });
  }
};

// when the user likes an img, set a cookie
var setLikesCount = function () {
  $(".img-likes").click(function () {
    var isNotLiked, i, span;
    i = $(this).find("i");
    span = $(this).find("span");
    isNotLiked = i.hasClass("fa-heart-o");

    /* only update when connection is alive and
       the user has not liked the img yet */
    if (navigator.onLine && isNotLiked) {
      var imgID, likesCount;
      imgID = $(this).data("attachid");

      // set the cookie and change unhearted to hearted
      jsc.set("img_" + imgID, true, {expires: 365});
      i.toggleClass("fa-heart-o fa-heart");

      // check if the count is valid integer and post to the server
      likesCount = span.text();

      if ($.isNumeric(likesCount)) {
        span.text(++likesCount);
      }

      $.post("", {$is_liked: true});
    }
  });
}

var main = function () {
  getLikesCount();
  setLikesCount();
};

$(document).ready(main);
