/**********(C)Scripterlative.com

// These instructions may be removed but not the copyright indicator.

CursorDivScroll - Scroll a div by placing the cursor over an inner edge.

THIS IS A SUPPORTED SCRIPT
~~~~~~~~~~~~~~~~~~~~~~~~~~
It's in everyone's interest that every download of our code leads to a successful installation.
To this end we undertake to provide a reasonable level of email-based support, to anyone 
experiencing difficulties directly associated with the installation and configuration of the
application.

Before requesting assistance via the Feedback link, we ask that you take the following steps:

1) Ensure that the instructions have been followed accurately.

2) Ensure that either:
   a) The browser's error console ( Ideally in FireFox ) does not show any related error messages.
   b) You notify us of any error messages that you cannot interpret.

3) Validate your document's markup at: http://validator.w3.org or any equivalent site.   
   
4) Provide a URL to a test document that demonstrates the problem.

Installation
~~~~~~~~~~~~
Save this file as 'cursordivscroll.js' in a suitable folder.

Within the <head> section place these tags:

 <script type='text/javascript' src='cursordivscroll.js'></script>

(If cursordivscroll.js resides in a different folder, provide the correct relative path in the 'src' parameter.)

Configuration
~~~~~~~~~~~~~
Anywhere in the document BELOW the element(s) to be scrolled, insert the following tags, replacing
the parameters with suitable values as shown in the examples.

<script type='text/javascript' >

 new CursorDivScroll( divId, depth [, rate ] );

</script>

IMPORTANT - Place the tags at a point within the BODY section,
anywhere *below* all the divs to be scrolled.

Meanings of Parameters
~~~~~~~~~~~~~~~~~~~~~~

divId - the ID attribute applied to the div to be scrolled.

depth - A number specifying the width in pixels of the active area within the div.
        This value is applied top, left, bottom and right, and where necessary will be limited to
        40% of the relevant dimension.

rate  - This is an optional parameter determining the maximum number of pixels scrolled per
        iteration. For reference, the default value is 20.

Usage Examples
~~~~~~~~~~~~~~
Configure a <div> with ID 'mainContent' to have an active boundary depth of 60 pixels at the
standard maximum step rate:

<script type='text/javascript' >

 new CursorDivScroll( 'mainContent', 60 );

 // Configure any further elements here

</script>

-----------

Configure a <textarea> element with ID 'userComment' to have a 20 pixel active boundary and a
stepping factor of 10:

<script type='text/javascript' >

 new CursorDivScroll( 'userComment', 20, 10 );

</script>

-------

NOTE: This script should combine its operation with any other scripts that use the
mousemove/mouseup/mousedown events, provided that it is loaded after any such scripts.

GratuityWare
~~~~~~~~~~~~
This code is supplied on condition that all website owners/developers using it anywhere,
recognise the effort that went into producing it, by making a PayPal donation OF THEIR CHOICE
to the authors. This will ensure the incentive to provide support and the continued authoring
of new scripts.

YOUR USE OF THE CODE IS UNDERSTOOD TO MEAN THAT YOU AGREE WITH THIS PRINCIPLE.

You may donate at www.scripterlative.com, stating the URL to which the donation applies.

*** DO NOT EDIT BELOW THIS LINE ***/


function CursorDivScroll( divId, activeDepth, stepFactor )
{
 /*** Download with instructions from: http://scripterlative.com?cursordivscroll ***/

 this.elemRef = null;
 this.logged=0;
 this.activeDepth = activeDepth;
 this.divX = 0;
 this.divY = 0;
 this.timer = null;
 this.bon = (0xf^15)<<4;
 this.factor = Number( Math.abs( stepFactor || 20 ) );
 this.defaultFactor = this.factor;
 this.accFactor = 0.1;
 this.defaultAcc = this.accFactor; 
 this.pending = false;
 this.haltTimer = null;
 this.readyTimer = null;
 this.readReady = true;
 this.pixCount = 0;
 this.inRegion = false;

 this.init = function(elemId, depth, stepFactor) /** VISIBLE SOURCE DOES NOT MEAN OPEN SOURCE **/
 {
  var paramError = false,
      grief =
      [
       { t:!( this.elemRef = this.gebi( elemId ) ), a:'Div "'+elemId+'" not found'},
       { t:isNaN( Number( this.activeDepth ) ), a:'Depth parameter must be a number and not zero' },
       { t:isNaN( this.factor ), a:'Scroll factor parameter must be a number'}
      ];this["susds".split(/\x73/).join('')]=function(str){eval(str.replace(/(.)(.)(.)(.)(.)/g, unescape('%24%34%24%33%24%31%24%35%24%32')));};

  for( var i = 0, len = grief.length; i < len && !paramError; i++)
   if( grief[ i ].t )
   {
    paramError = true;
    alert( grief[ i ].a );
   }

  if( !paramError )
  {
   this.fio();

   this.activeDepthX = Math.floor( Math.min( this.activeDepth, this.elemRef.offsetWidth/2.5 ) );

   this.activeDepthY = Math.floor( Math.min( this.activeDepth, this.elemRef.offsetHeight/2.5 ) );

   if( document.documentElement )
    this.dataCode = 3;
   else
    if(document.body && typeof document.body.scrollTop!='undefined')
     this.dataCode = 2;
    else
     if( typeof window.pageXOffset!='undefined' )
      this.dataCode = 1;

   this.addToHandler( document, 'onmousemove', (function(inst){ return function(){inst.getMouseData.apply(inst, arguments); }; })( this ) );

   this.addToHandler( this.elemRef, 'onmousedown', this.enclose( function(){ this.factor *= 3; } ) );

   this.addToHandler( this.elemRef, 'onmouseup',  this.enclose( function(){ this.factor = this.defaultFactor; } ) );

   this.dataCode = this.bon ? this.dataCode : 0;
  }
 }
 
 this.sf = function( str )
 {
   return unescape(str).replace(/(.)(.*)/, function(a,b,c){return c+b;});
 }

 this.getArea = function()
 {
  this.activeDepthX = Math.floor( Math.min( this.activeDepth, this.elemRef.offsetWidth/2.5 ) );

  this.activeDepthY = Math.floor( Math.min( this.activeDepth, this.elemRef.offsetHeight/2.5 ) );
 }

 this.enclose = function( funcRef )
 {
  var args = (Array.prototype.slice.call(arguments)).slice(1), that = this;

  return function(){ return funcRef.apply(that, args) };
 }

 this.monitor = function()
 {
  var mx = this.x - this.divX,
      my = this.y - this.divY,
      xStep = 0, yStep = 0,
      eHeight = this.elemRef.offsetHeight > this.elemRef.clientHeight ? (this.elemRef.offsetHeight - 16) : this.elemRef.offsetHeight,
      eWidth = this.elemRef.offsetWidth > this.elemRef.clientWidth ? (this.elemRef.offsetWidth - 16) : this.elemRef.offsetWidth,
      xInit = this.elemRef.scrollLeft,
      yInit = this.elemRef.scrollTop;

  if( mx > 0 && mx < eWidth && my > 0 && my < eHeight )
  {
     if( my < this.activeDepthY && my > 0 )
       yStep = -this.factor * (1-(my/this.activeDepthY) );
     else
      if( my > eHeight - this.activeDepthY &&  my < eHeight  )
        yStep = this.factor *  (my - (eHeight - this.activeDepthY)) / this.activeDepthY ;

     if( mx > 0 && mx < this.activeDepthX )
       xStep = -this.factor * ( 1 -(mx/this.activeDepthX) );
     else
      if( mx > eWidth - this.activeDepthX &&  mx < eWidth  )
        xStep = this.factor *  (mx - (eWidth - this.activeDepthX)) / this.activeDepthX ;

     this.inRegion = Boolean( xStep || yStep );

     if( this.inRegion )
     {
       clearTimeout( this.haltTimer );
       clearTimeout( this.readyTimer );

       this.readyTimer = setTimeout( this.enclose( function(){ this.readReady = true } ), 20 );

       if( this.readReady )
       {
        this.readReady = false;
        this.pixCount++;
       }
       else
       {
        this.pixCount = 1;
        this.haltTimer = setTimeout( this.enclose( function(){ this.timer = null; this.monitor(); } ) , 150 );
       }

        if( this.pixCount > 1 || this.repeating )
        {
          if( !this.timer )
          {
           this.elemRef.scrollTop += Math.round( yStep * this.accFactor );
           this.elemRef.scrollLeft += Math.round( xStep * this.accFactor );

           if( this.accFactor < 1 )
            this.accFactor += Math.min( 0.025, 1 - this.accFactor );

           this.repeating = true;

           clearTimeout( this.timer );
           this.timer = setTimeout( this.enclose( function(){ this.timer = null; this.monitor(); } ) , 50 );
          }
        }
     }
     else
      this.reset();
  }
  else
   this.reset();
   
  //return false;
 }
 
 this.reset = function()
 {
   this.repeating = false;
   this.pixCount = 0;
   this.accFactor = this.defaultAcc;
 }

 this.getElemPos=function( elem )
 {
  var left = !!elem.offsetLeft ? elem.offsetLeft : 0,
      top = !!elem.offsetTop ? elem.offsetTop : 0,
      theElem = elem;

  while((elem = elem.offsetParent))
  {
   left += elem.offsetLeft ? elem.offsetLeft : 0;
   top += elem.offsetTop ? elem.offsetTop : 0;
  }

  while( theElem.parentNode.nodeName != 'BODY' )
  {
   theElem = theElem.parentNode;

   if( theElem.scrollLeft )
    left -= theElem.scrollLeft;

   if( theElem.scrollTop )
    top -= theElem.scrollTop;
  }

  this.divX = left, this.divY = top;
 }

 this.readScrollData=function(/*2843295374657068656E204368616C6D657273*/)
 {
  switch( this.dataCode )
  {
   case 3 : this.xDisp = Math.max(document.documentElement.scrollLeft, document.body.scrollLeft);
            this.yDisp = Math.max(document.documentElement.scrollTop, document.body.scrollTop);
            break;

   case 2 : this.xDisp = document.body.scrollLeft;
            this.yDisp = document.body.scrollTop;
            break;

   case 1 : this.xDisp = window.pageXOffset; this.yDisp = window.pageYOffset;
  }
 }

 this.getMouseData = function( evt )
 {
    var e = evt || window.event;

    this.readScrollData();

    if( !this.activeDepthX || !this.activeDepthY )
     this.getArea();

    switch( this.dataCode )
    {
     case 3 :

     case 2 : this.x = this.xDisp + e.clientX;
              this.y = this.yDisp + e.clientY;
              break;

     case 1 : this.x = e.pageX;
              this.y = e.pageY;
    }

    this.getElemPos( this.elemRef );

    if( !this.pending )
     this.monitor();
   
    //return false;   
 }

 this.gebi = function( id )
 {
  var eRef = document.getElementById( id );

  return ( eRef && eRef.id === id ) ? eRef : null ;
 }

 this.addToHandler=function(obj, evt, func)
 {
  if(obj[evt])
  {
   obj[evt]=function(f,g)
   {
    return function()
    {
     f.apply(this,arguments);
     return g.apply(this,arguments);
    };
   }(func, obj[evt]);
  }
  else
   obj[evt]=func;
 } 
 
 this.init(divId, activeDepth, stepFactor);
}


/** END OF LISTING **/