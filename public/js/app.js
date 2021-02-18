const app = 
{
  /**
   * This is the url of API REST Country
   */
  apiBaseUrl : 'https://restcountries.eu/rest/v2/all',

  /**
   * This is the fetchOptions, use this variable in the request
   */
  fetchOptions : 
  {
  method:'GET',
  mode: 'cors',
  cache:'no-cache'
  },

  /**
   * Function to init JS script
   */
  init: function()
  {
  app.initAPI();
  quiz.init;

  let select = document.querySelector('.container_select').addEventListener('change', app.handleSelect );
  
  let form = document.querySelector('.container_ul form').addEventListener('submit', app.handleInput);

  },

  /**
   * Function to init ajax request to get elements in API REST Country
   */
  initAPI : function()
  {
  fetch(app.apiBaseUrl, app.fetchOptions)
    .then
    (
    app.handleResponse
    )
    .then
    (
    app.updateSelection
    );
  },

  /**
   * Function to return response of ajax request
   * @param {object} response 
   */
  handleResponse: function (response)
  {
    return response.json();
  },

  /**
   * Function to use the response request and create the page with all nations
   * @param {object} object 
   */
  updateSelection : function(object)
  {
  let selectDivHome = document.querySelector('.container_home_api');

  if(selectDivHome != null || selectDivHome != undefined)
  {
    for(let currentData of object) 
    {
      let div = document.createElement('div');
      div.className = 'container_thumbnail';
      app.createDivHome(currentData, div);
    }
  }
    
  let selectDivDétails = document.querySelector('.container_details_api');
  if(selectDivDétails != null || selectDivDétails != undefined)
    { 
      for (let currentData of object)
      {
      let currentUrl = window.location.href;
        if(currentUrl === 'http://drapeaux/public/' + currentData.alpha2Code)
        {
          app.createDivDetails(currentData, selectDivDétails);
        }
      }
    }
  }, 

  /**
   * Function to get input value and use it to post correct div
   * @param {event} evt 
   */
  handleInput: function(evt)
  {
  evt.preventDefault();
  let inputValue = document.querySelector('.container_ul form input').value;

  fetch(app.apiBaseUrl, app.fetchOptions)
    .then
    (
      app.handleResponse
    )
    .then
    (function(object)
    {
      { for(let currentData of object) 
        {
          if (inputValue == currentData.name)
          {
          let selectDivHome = document.querySelector('.container_home_api');
          selectDivHome.remove('.container_thumbnail');
          let selectDivDétails = document.createElement('div');
          selectDivDétails.className = 'container_details_api';
          let divContainer = document.querySelector('.container');
          divContainer.appendChild(selectDivDétails);

          app.createDivDetails(currentData, selectDivDétails);
          }
        } 
      }
    }
    );
    
  },

  /**
   * Function to get select value and use it to post correct list
   * @param {event} evt 
   */
  handleSelect: function(evt)
  {
  evt.preventDefault();
  
  let selectDivHome = document.querySelector('.container_home_api');
  let optionSelect = document.querySelector('select').value;
    
  fetch(app.apiBaseUrl, app.fetchOptions)
    .then
    (
      app.handleResponse
    )
    .then
    (function(object)
    {
      if(selectDivHome != null || selectDivHome != undefined)
      { 
      let selectDivHome = document.querySelector('.container_home_api');
      selectDivHome.remove('.container_thumbnail');
      let divContainerSelect = document.createElement('div');
      divContainerSelect.className = 'container_home_api';
      let divContainer = document.querySelector('.container');

      divContainer.appendChild(divContainerSelect);
      for(let currentData of object) 
      {
      let continent = currentData.region;
      if (optionSelect == continent)
      {
        let div = document.createElement('div');
        div.className = 'container_thumbnail';
        app.createDivHome(currentData, div);

        divContainerSelect.appendChild(div)
      }
      } 
      }
    }
    );
  },

  /**
   * Create a div with all nations and their flag
   * 
   */
  createDivHome : function(currentData, div)
  {
  let selectDivHome = document.querySelector('.container_home_api');
  let imgElement = document.createElement('img');

  imgElement.setAttribute('src', 'https://flagcdn.com/' + currentData.alpha2Code.toLowerCase() +'.svg');
  let aElement = document.createElement('a');
  let hElement = document.createElement('h2');
  aElement.setAttribute('href', currentData.alpha2Code);
  aElement.textContent = currentData.name;

  aElement.appendChild(hElement);
  aElement.appendChild(imgElement);
  selectDivHome.appendChild(div);
  div.appendChild(aElement);
  },

  /**
   * Create a div with all informations about a nation
   * @param {object} currentData 
   * @param {string} selectDivDétails 
   */
  createDivDetails: function(currentData, selectDivDétails)
  {
  let hElement = document.createElement('h2');
  hElement.textContent = currentData.name;

  let imgElement = document.createElement('img');
  imgElement.setAttribute('src', 'https://flagcdn.com/' + currentData.alpha2Code.toLowerCase() +'.svg');
          
  let pNativeName = document.createElement('p');
  pNativeName.textContent = 'Nom du pays dans sa langue : ' + currentData.nativeName;

  let pContinent = document.createElement('p');
  pContinent.textContent = 'Continent : ' + currentData.region;

  let pCapital = document.createElement('p');
  pCapital.textContent = 'Capitale : ' + currentData.capital;

  let pPopulation = document.createElement('p');
  pPopulation.textContent = 'Population : ' + currentData.population + ' habitants';

  let divImg = document.createElement('div');
  divImg.className = 'container_details_img_p';

  let divP = document.createElement('div');
  divP.className = 'container_p';

  selectDivDétails.appendChild(hElement);
  divImg.appendChild(imgElement);
  divP.appendChild(pNativeName);
  divP.appendChild(pContinent);
  divP.appendChild(pCapital);
  divP.appendChild(pPopulation);
  divImg.appendChild(divP);

  selectDivDétails.appendChild(divImg);
  }
}
document.addEventListener('DOMContentLoaded', app.init);