(function(){
  const btn=document.querySelector('.mobile-menu-btn');
  const nav=document.querySelector('.mobile-nav');
  if(!btn||!nav)return;
  btn.addEventListener('click',()=>{
    nav.classList.toggle('is-open');
  });
})();