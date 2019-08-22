new Glide('#section-3 .glide', {
  type: 'carousel',
  startAt: 0,
  perView: 3,
  focusAt: 1,
  gap: 50,
  breakpoints: {
    992: {
      perView: 2
    },
    768: {
      perView: 1
    }
  }
}).mount();

new Glide('#section-4 .glide', {
  type: 'slide'
}).mount();

new Glide('#section-1 .glide', {
  type: 'slide',
  autoplay: 4000
}).mount();

const allElem = document.getElementsByTagName('*');
for (i = 0; i < allElem.length; i++) {
  let e = allElem[i];
  if(e.hasAttribute('fs-data'))
    e.innerHTML = wordWrap(e.innerHTML,e.getAttribute('fs-data'));
}

document.body.addEventListener('keyup', function(e) {
    if(e.key === "Escape"){
    	closeLomad();
    }
});

document.getElementById('section-3').querySelectorAll('.btn').forEach((el) => {
  el.setAttribute('onclick', 'sec3Lomad(this)');
  el.setAttribute('href', 'javascript:void(0)');
});

document.getElementById('section-4').querySelectorAll('.btn').forEach((el) => {
  el.setAttribute('onclick', 'sec4Lomad(this)');
  el.setAttribute('href', 'javascript:void(0)');
});

document.getElementById('section-5').querySelectorAll('.btn').forEach((el) => {
  el.setAttribute('onclick', 'sec5Lomad(this)');
  el.setAttribute('href', 'javascript:void(0)');
});

document.querySelector('.ladom').addEventListener('click',(e)=>{
  if(e.target.getAttribute('class') && (e.target.getAttribute('class').indexOf('w-100') != -1 || e.target.getAttribute('class').indexOf('row') != -1 || e.target.getAttribute('class').indexOf('open-ladom') != -1))
    closeLomad();
});

function sec5Lomad(a){
  document.querySelector('.ladom').classList.add('sec5');
  opemLomad();
}

function sec4Lomad(a){
  document.querySelector('.ladom-container').classList.add('sec4');
  var a = a.closest('.glide__slide');
  document.querySelector('.ladom .ladom-header').setAttribute('style',a.querySelector('.side-bg').getAttribute('style'));

  document.querySelector('.ladom .ladom-container').innerHTML = '<h4>'+a.querySelector('h4').innerHTML + '</h4>' + a.querySelector('.ladom-copy').innerHTML;

  opemLomad();
}

function sec3Lomad(a){
  var a = a.closest('.glide__slide');
  document.querySelector('.ladom .ladom-header').setAttribute('style',a.querySelector('.row').getAttribute('style'));
  document.querySelector('.ladom .ladom-container').innerHTML = '<h4>'+a.querySelector('h4').innerHTML + '</h4>' + '<h5 class="sub">'+a.querySelector('.pt-3 p').innerHTML+'</h5>'+ a.querySelector('.ladom-copy').innerHTML;

  opemLomad();
}

function opemLomad(){
  document.querySelector('body').classList.add('ladom-open');
  document.querySelector('.ladom').classList.add('open-ladom');
}

function closeLomad(){
  document.querySelector('.ladom').setAttribute('class','ladom');
  document.querySelector('.ladom-container').setAttribute('class','ladom-container');
  document.querySelector('body').classList.remove('ladom-open');
}


const sControl = document.querySelector('.side-control');
getSecViewed();
window.onscroll = getSecViewed;
sControl.querySelectorAll('a').forEach(sideControl);
function sideControl(v,i){
  v.addEventListener('click', function(){
    scrollIt(document.getElementById('section-'+(i+1)),'500', 'linear');
    updateSideControl(i);
  });
}
function updateSideControl(i){
  var ctr = 0;
  [].forEach.call(sControl.querySelectorAll('a'), function(el) {
    if(i == ctr)
      el.classList.add('active');
    else
      el.classList.remove('active');
    ctr++;
  });
}
function getSecViewed(){
  var secArr = [],
  secTar = 0;
  [].forEach.call(document.querySelectorAll('.section'), function(el){
    let secId = el.getAttribute('id').replace('section-', '');
    if(checkSectionView(secId) == 1){
      secArr.push(secId);
    }
  });
  secTar = compareSecView(secArr);
  updateSideControl(secTar-1);
}

function compareSecView(arr){
  var nums = 0,t = 0,ctr1=0;
  for(i=0;i<arr.length;i++){
    ctr1=i;
    var windowHeight = window.innerHeight,
    windowScrollTop = window.scrollY,
    e1 = document.getElementById('section-'+arr[i]);
    elementHeight = e1.offsetHeight,
    elementOffsetTop = e1.offsetTop,asd=0;
    if(windowScrollTop != elementOffsetTop){
      if(ctr1==0){
        asd = elementHeight - (windowScrollTop - elementOffsetTop);
      }else {
        if(windowScrollTop < elementOffsetTop){
          asd = windowHeight - (elementOffsetTop - windowScrollTop);
        }
      }

      if(nums == 0){
          nums = asd;
          t = arr[i];
      }else{
        if(nums < asd){
          nums = asd;
          t = arr[i];
        }
      }
    }else
      return t = arr[i];
  }
    return t;
}

function checkSectionView(i){
  var windowHeight = window.innerHeight,
  windowScrollTop = window.scrollY,
  e1 = document.getElementById("section-"+i),
  elementHeight = e1.offsetHeight,
  elementOffsetTop = e1.offsetTop;

  if ((elementOffsetTop <= windowScrollTop + (windowHeight - 1)) && (elementOffsetTop + elementHeight >= windowScrollTop))
    return 1;
  else
    return 0;
}

document.querySelector('.scroll-down').addEventListener('click',() => {
  scrollIt(document.getElementById('section-2'),500,'linear','');
});

function wordWrap(n,r){var a,p="<span>",t=0;for(a=n.split(" ");t!=a.length;)p+=t==r-1?a[t]+"</span> ":a[t]+" ",t++;return p}
function scrollIt(e,n=200,t="linear",o){const i={linear:e=>e},m=window.pageYOffset,c="now"in window.performance?performance.now():(new Date).getTime(),d=Math.max(document.body.scrollHeight,document.body.offsetHeight,document.documentElement.clientHeight,document.documentElement.scrollHeight,document.documentElement.offsetHeight),r=window.innerHeight||document.documentElement.clientHeight||document.getElementsByTagName("body")[0].clientHeight,w="number"==typeof e?e:e.offsetTop,a=Math.round(d-w<r?d-r:w);if("requestAnimationFrame"in window==!1)return window.scroll(0,a),void(o&&o());!function e(){const d="now"in window.performance?performance.now():(new Date).getTime(),r=Math.min(1,(d-c)/n),w=i[t](r);window.scroll(0,Math.ceil(w*(a-m)+m)),window.pageYOffset!==a?requestAnimationFrame(e):o&&o()}()}
