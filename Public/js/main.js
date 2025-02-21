async function fetchData() {
  try {
    const api = "fbf788947f04134479d276004b0a0d51";
    const response = await fetch(`https://gnews.io/api/v4/search?q=business&apikey=${api}`);
    const data = await response.json();
    const postsContainer = document.getElementById('posts-container');
    if(!response.ok){
      throw new Error("faild fetch");
    }
    postsContainer.innerHTML = "";

    for(let i = 0 ; i < 10;i++){
      let post = data["articles"][i];
      const postDiv = document.createElement('div');
      postDiv.classList.add('card');
      postDiv.innerHTML = `
        <div class="row g-0 h-100">
          <div class="col-5 h-100">
            <img src="${post.image}" class="img-fluid rounded-end h-100 w-100" style="object-fit:cover" alt="Post Image">
          </div>
          <div class="col-7 h-100">
            <div class="card-body">
              <h5 class="card-title text-truncate" >${post.title}</h5>
              <h6 class="card-subtitle mb-2 text-muted text-truncate" >${post.description}</h6>
              <p class="card-text">${post.content}</p>
              <a href="${post.url}" class="btn btn-primary" target="_blank">Read more</a>
              <p class="mt-3"><strong>Source:</strong> ${post.source.name}</p>
            </div>
          </div>
        </div>
      `;
      postsContainer.appendChild(postDiv);
    }
  } catch (error) {
    console.error('Error fetching data:', error);
  }
}
window.onload = fetchData;