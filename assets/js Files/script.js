
// This code for InfoFitness page  START
let tableChildrensData =[
    {type:'Protein' , source:'Lean meats'},
    {type:'Carbohydrate' , source:'bread'},
    {type:'Protein' , source:'Fish'},
    {type:'Carbohydrate' , source:'Fruits'},
    {type:'Protein' , source:'Eggs'},
    {type:'Carbohydrate' , source:'Vegetables'},
    {type:'Protein' , source:'milk'}
];
let tableAdultsData =[
    {type:'Protein' , source:'Lean meats'},
    {type:'Carbohydrate' , source:'Whole grains'},
    {type:'Protein' , source:'Eggs'},
    {type:'Carbohydrate' , source:'Sweet potatoes'},
    {type:'Protein' , source:'Nuts'},
    {type:'Carbohydrate' , source:'pasta'},
    {type:'Protein' , source:'Legumes'}
];
let tableElderlyData =[
    {type:'Protein' , source:'Lean meats '},
    {type:'Carbohydrate' , source:'oats'},
    {type:'Protein' , source:'seafood'},
    {type:'Carbohydrate' , source:'brown rice'},
    {type:'Protein' , source:'Protein shakes'},
    {type:'Carbohydrate' , source:'Soft fruits'},
    {type:'Protein' , source:'Eggs'}
];


function loadData(anyData){
    const tableBody = document.getElementById('tableData');
    let dataHtml='';
    for(let data of anyData){
        dataHtml +=`<tr> <td>${data.source}</td> 
                         <td>${data.type}</td> 
                    </tr>`
    }
    
    tableBody.innerHTML = dataHtml;

}


// This code for InfoFitness page  END





// START banner

// Function to update date and time in the banner
function updateDateTime() {
    const currentDate = new Date().toLocaleDateString('en-US');
    const currentTime = new Date().toLocaleTimeString('en-US');
    document.getElementById('currentDate').textContent = currentDate;
    document.getElementById('currentTime').textContent = currentTime;
  }
  
  // Function to move the text banner from left to right
  function moveTextBanner() {
    const banner = document.querySelector('.text-banner');
    let position = -banner.offsetWidth; // Starting position outside the viewport
//   I'm using Arrow function here
    const moveInterval = setInterval(() => {
      if (position >= window.innerWidth) {
        position = -banner.offsetWidth;
      } else {
        position += 1;
        banner.style.left = position + 'px';
      }
    }, 10); // Change the speed of movement by adjusting the interval
  
    // Update date and time every second
    updateDateTime();
    setInterval(updateDateTime, 1000);
  }
  
  // Start the text banner movement when the window loads
  window.onload = moveTextBanner;

  
//   END banner