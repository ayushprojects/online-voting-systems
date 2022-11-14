// variables for storing api results
let politicsNews = [];
let sportsNews = [];
let topNews = [];

// reference to DOM Elements
let politicsNewsDiv = document.querySelector(".political");
let sportsNewsDiv = document.querySelector(".sports");
let topNewsDiv = document.querySelector(".latest");

function fetchNews(category) {
  axios(
    `https://newsdata.io/api/1/news?apikey=pub_1165622c35f535033ce0fb7e5d277b1178816&country=in&category=${category}`
  )
    .then(function (response) {
      switch (category) {
        case "politics":
          politicsNews = response.data.results;
          displayNewsItems(category);
          break;
        case "sports":
          sportsNews = response.data.results;
          displayNewsItems(category);
          break;
        case "top":
          topNews = response.data.results;
          displayNewsItems(category);
          break;
        default:
          break;
      }
    })
    .catch(function (error) {
      console.error(error);
    });
}

function displayNewsItems(category) {
  let newsList = document.createElement("ul");
  switch (category) {
    case "politics":
      politicsNews.map((news) => {
        let newsItem = document.createElement("li");
        newsItem.innerText = news.title;
        newsList.appendChild(newsItem);
      });
      politicsNewsDiv.appendChild(newsList);
      break;
    case "sports":
      sportsNews.map((news) => {
        let newsItem = document.createElement("li");
        newsItem.innerText = news.title;
        newsList.appendChild(newsItem);
      });
      sportsNewsDiv.appendChild(newsList);
      break;
    case "top":
      topNews.map((news) => {
        let newsItem = document.createElement("li");
        newsItem.innerText = news.title;
        newsList.appendChild(newsItem);
      });
      topNewsDiv.appendChild(newsList);
      break;
    default:
      break;
  }
}

fetchNews("politics");
fetchNews("sports");
fetchNews("top");
