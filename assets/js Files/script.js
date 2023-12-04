
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

//function to load data and create table's rows
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
const  sourceAll= ['lean meats','bread', 'oats', 'whole grains','seafood','brown rice','protein shakes','soft fruits' ,'eggs' , 'milk' ,'nuts' , 'sweet potatoes','vegetables','fruits','pasta' , 'legumes' ,'fish'];
// function to search in a list of key words that related to the content of the table...
function CheckSource(sourceAll){
  var check = document.getElementById("check");
  var checkValue = check.value.toLowerCase();
  if(sourceAll.includes(checkValue)){
      window.alert("It is exist!");} 
  else{
      window.alert("It is not exist!"); 
  
}
}


function addNewElement() {
  // Get input values
  let source = document.getElementById("sourceInput").value;
  let type = document.getElementById("typeInput").value;

  // Check if source or type is empty
  if (source.trim() === '' || type.trim() === '') {
      alert('Please enter both source and type.');
      return;
  }

  // Get the selected radio button value
  let selectedValue = document.querySelector('input[name="info"]:checked').value;

  // Add new element to the appropriate table based on the selected radio button
  let newData = { type: type, source: source };
  if (selectedValue === 'children') {
      tableChildrensData.push(newData);
      loadData(tableChildrensData); // Update the Children table
  } else if (selectedValue === 'adults') {
      tableAdultsData.push(newData);
      loadData(tableAdultsData); // Update the Adults table
  } else if (selectedValue === 'elderly') {
      tableElderlyData.push(newData);
      loadData(tableElderlyData); // Update the Elderly table
  }
}


// This code for InfoFitness page  END







//MembershipInfo page Start 

// Arrays of objects to be loaded in the table
let tableOneData =[
  {service:'Swimming Pool(not incl)' , type:'5 OR to add'},
  {service:'Cardio' , type:'- -'},
  {service:'Coach(not incl)' , type:'5 OR to add'},
  
];
let tableTwoData =[
  {service:'Swimming Pool' , type:'- -'},
  {service:'Cardio' , type:'- - '},
  {service:'Coach' , type:'- -'},
 
];
let tableSixData =[
  {service:'Swimming Pool' , type:'- -'},
  {service:'Cardio' , type:'- -'},
  {service:'Coach' , type:'- -'},
  
];
let tableYearData =[
  {service:'Swimming Pool' , type:'- -'},
  {service:'Cardio' , type:'- -'},
  {service:'Coach' , type:'- -'},
  
];
//function to load data and create table's rows
function loadInfo(anyData){
  const tableBody = document.getElementById('tableData');
  let dataHtml='';
  for(let data of anyData){
      dataHtml +=`<tr> <td>${data.service}</td> 
                       <td>${data.type}</td> 
                  </tr>`
  }
  
  tableBody.innerHTML = dataHtml;

}


const  membershipAll= ['swimming pool' , 'swimming' , 'cardio' , 'coach' ,'5' , '5or' ,'5 or'];
// function to search in a list of key words that related to the content of the table...
function CheckSource(membershipAll){
  var check = document.getElementById("check");
  var checkValue = check.value.toLowerCase();
  if(membershipAll.includes(checkValue)){
      window.alert("It is exist!");} 
  else{
      window.alert("It is not exist!"); 
  
}
}
//This 
let suggestionList = [];
function addNewSuggestion() {
  // Get input values
  let service = document.getElementById('serviceInput').value;
  let price = document.getElementById('priceInput').value;

  // Check if service or price is empty
  if (service.trim() === '' || price.trim() === '') {
      alert('Please enter both source and type.');
      return;
  }
  // Check if service and price are valid
  else if(typeof service.trim() !=='string' && typeof parseInt(price.trim()) !=='int' ){
    alert("invalid input in service or price fields");
  }
 
  

  // Add new element to the appropriate array
  let newData = { service: service, price: price };
 
  suggestionList.push(newData);

  // Update the corresponding table
  loadSuggestion(suggestionList); // Use the function to update the table
}

//Function to load the data to the suggestion table..
function loadSuggestion(suggestionList){
  const tableBody = document.getElementById('SuggestionTable');
  let dataHtml='';
  for(let data of suggestionList){
      dataHtml +=`<tr> <td>${data.service}</td> 
                       <td>${data.price}</td> 
                  </tr>`
  }
  
  tableBody.innerHTML = dataHtml;

}



//MembershipInfo page End