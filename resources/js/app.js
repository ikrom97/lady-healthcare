import './modules/texts.js';

const globalSearch = document.querySelector('.global-search');

document.querySelector('.main-navigation__toggler')
  .addEventListener('click', () =>
    document.body.classList.toggle('page__body--menu-shown')
  );

globalSearch.addEventListener('click', handleGlobalSearchClick);

function handleGlobalSearchClick() {
  document.body.classList.add('page__body--global-search-opened');
  document.addEventListener('click', handleDocumentClick);
  globalSearch.removeEventListener('click', handleGlobalSearchClick);
}

function handleDocumentClick(evt) {
  if (!evt.target.closest('.global-search')) {
    document.body.classList.remove('page__body--global-search-opened');
    document.removeEventListener('click', handleDocumentClick);
    globalSearch.addEventListener('click', handleGlobalSearchClick);
  }
}


