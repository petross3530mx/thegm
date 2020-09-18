<?php /* Template Name: Infinity Page */ ?>
<?php get_header(); ?>
<script async src="https://www.googletagservices.com/tag/js/gpt.js"></script>
<script>
    var googletag = googletag || {};
    googletag.cmd = googletag.cmd || [];
</script>

<style>
div#content {
    max-width: 728px;
    margin: 0 auto;
}

button {
    background-color: black;
    color: white;
    padding: 25px 40px;
    font-size: 30px;
    font-weight: bold;
    -webkit-appearance: none;
    border: 0;
    display: block;
    margin: 0 auto;
    margin-bottom: 50px;
}
</style>

<script>

var adslot0;

 googletag.cmd.push(function() {

  // Declare any slots initially present on the page
  var mapping1 = googletag.sizeMapping().
            addSize([320, 400], [[300, 250], [320, 50], [300, 50]]).
            addSize([750, 200], [728, 90]).
          build();

  // Declare any slots initially present on the page
  var mapping970 = googletag.sizeMapping().
            addSize([320, 400], [300, 250]).
            addSize([800, 400], [728, 90]).
            addSize([1024, 400], [[970, 250],[728, 90]]).
          build();
    
  
   // Declare any slots initially present on the page
   adslot0 = googletag.defineSlot('/21714348041/after_first_page_728x90', [728, 90], 'leaderboard').defineSizeMapping(mapping1).
       setTargeting("test","infinitescroll").
       addService(googletag.pubads());



   // Infinite scroll requires SRA
   googletag.pubads().enableSingleRequest();

   // Disable initial load, we will use refresh() to fetch ads.
   // Calling this function means that display() calls just
   // register the slot as ready, but do not fetch ads for it.
   googletag.pubads().disableInitialLoad();

   // Enable services
   googletag.enableServices();
 });

 // Function to generate unique names for slots
 var nextSlotId = 1;
 function generateNextSlotName() {
   var id = nextSlotId++;
   return 'adslot' + id;
 }

 // Function to add content to page, mimics real infinite scroll
 // but keeps it much simpler from a code perspective.
 function moreContent() {


     // for (var i = 0; i < 2; i++) {
     //   var slotName = generateNextSlotName();
     //   var slotDiv = document.createElement('div');
     //   slotDiv.id = slotName; // Id must be the same as slotName
     //   document.getElementById('inner-content').appendChild(slotDiv);
     // }

     
   
   // Create and add fake content 1
   var h1=document.createElement("p")
   var text1=document.createTextNode(" Buzz cut is no longer a military hairstyle only but a popular everyday men’s cut. It’s low-maintained, stylish, dapper and versatile. Having a lot of variations depending on its length, buzzed hairstyle looks perfect on gents of any age. To get the most out of your hair, try its longer versions. Just keep in mind the clipper setting size for the most precise results.");
   h1.appendChild(text1);
   document.getElementById('inner-content').appendChild(h1);

   // Create and add fake content 2
   var h2=document.createElement("p")
   var text2=document.createTextNode(" Buzz cut is no longer a military hairstyle only but a popular everyday men’s cut. It’s low-maintained, stylish, dapper and versatile. Having a lot of variations depending on its length, buzzed hairstyle looks perfect on gents of any age. To get the most out of your hair, try its longer versions. Just keep in mind the clipper setting size for the most precise results.");
   h2.appendChild(text2);
   document.getElementById('inner-content').appendChild(h2);


   googletag.cmd.push(function() {
     var a = [[728, 90],[300, 600],[728, 90],[300, 600]];
     for ( var i=0; i<a.length; i++ ){
         // Generate next slot name
         var slotName = generateNextSlotName();

         // Create a div for the slot
         var slotDiv = document.createElement('div');
         slotDiv.id = slotName; // Id must be the same as slotName
         document.getElementById('inner-content').appendChild(slotDiv);

         var slot = googletag.defineSlot('/21714348041/after_first_page_728x90', a[i], slotName).
         setTargeting("test","infinitescroll").
         addService(googletag.pubads());
         // Display has to be called before
         // refresh and after the slot div is in the page.
         googletag.display(slotName);
         googletag.pubads().refresh([slot]);
     };
   });
 };

(function() {
  window.addEventListener('scroll', function(e) {
    var position = window.scrollY;
    var bottom = document.getElementById("page").offsetHeight - window.innerHeight + 55;
    console.log('Position:' + position + 'Bottom:' + bottom);
    if( position >= bottom ){
        moreContent();
    };});
})();

</script>

<!-- <style>
 body > div {
	margin-bottom: 1em;
	border: solid 1px black;
	width: 728px
 }
 body > img {
	margin-bottom: 1em;
	display: block
 }
 body > button {
	position: fixed;
	bottom: 10px;
 }
</style>
</head> -->
 <h1>Content</h1>

 <!-- First ad -->
 <div id="leaderboard"> 
     <script>
        // Call display() to register the slot as ready
        // and refresh() to fetch an ad.
        googletag.cmd.push(function() {
          googletag.display('leaderboard');
          googletag.pubads().refresh([adslot0]);
        });
     </script> 
 </div>

 <!-- More initial fake content -->
 <text>
  <h2> Initial Fake Content 1 </h2>
  <p> Buzz cut is no longer a military hairstyle only but a popular everyday men’s cut. It’s low-maintained, stylish, dapper and versatile. Having a lot of variations depending on its length, buzzed hairstyle looks perfect on gents of any age. To get the most out of your hair, try its longer versions. Just keep in mind the clipper setting size for the most precise results.</p>
  <h2> Initial Fake Content 2 </h2>
  <p> Buzz cut is no longer a military hairstyle only but a popular everyday men’s cut. It’s low-maintained, stylish, dapper and versatile. Having a lot of variations depending on its length, buzzed hairstyle looks perfect on gents of any age. To get the most out of your hair, try its longer versions. Just keep in mind the clipper setting size for the most precise results.</p>
 </text>
<div id="inner-content"></div>
 <!-- Button to load more content dynamically. -->
 <button onclick="moreContent()">More Content</button>
<?php get_footer(); ?>