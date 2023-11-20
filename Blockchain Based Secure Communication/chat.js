// Connect to Ethereum network using Web3.js

var i=0,j=0;
const web3 = new Web3(Web3.currentProvider || 'http://localhost:7545');
//const contractAddress = '0x668343b08C6DCA5312851aaCcdc1B35B4Dfc9592';
const contractAddress = '0xB79fC19174A6e1b407268D4Ab53B911f3A04E8d1';
const contractABI = [
  {
    "inputs": [],
    "name": "get",
    "outputs": [
      {
        "internalType": "string[]",
        "name": "",
        "type": "string[]"
      }
    ],
    "stateMutability": "view",
    "type": "function"
  },
  {
    "inputs": [],
    "name": "getReceiver",
    "outputs": [
      {
        "internalType": "string[]",
        "name": "",
        "type": "string[]"
      }
    ],
    "stateMutability": "view",
    "type": "function"
  },
  {
    "inputs": [],
    "name": "getSender",
    "outputs": [
      {
        "internalType": "string[]",
        "name": "",
        "type": "string[]"
      }
    ],
    "stateMutability": "view",
    "type": "function"
  },
  {
    "inputs": [
      {
        "internalType": "uint256",
        "name": "i",
        "type": "uint256"
      }
    ],
    "name": "pos",
    "outputs": [
      {
        "internalType": "string",
        "name": "",
        "type": "string"
      }
    ],
    "stateMutability": "view",
    "type": "function"
  },
  {
    "inputs": [
      {
        "internalType": "uint256",
        "name": "",
        "type": "uint256"
      }
    ],
    "name": "receiver",
    "outputs": [
      {
        "internalType": "string",
        "name": "",
        "type": "string"
      }
    ],
    "stateMutability": "view",
    "type": "function"
  },
  {
    "inputs": [
      {
        "internalType": "uint256",
        "name": "",
        "type": "uint256"
      }
    ],
    "name": "sender",
    "outputs": [
      {
        "internalType": "string",
        "name": "",
        "type": "string"
      }
    ],
    "stateMutability": "view",
    "type": "function"
  },
  {
    "inputs": [
      {
        "internalType": "string",
        "name": "test2",
        "type": "string"
      }
    ],
    "name": "set",
    "outputs": [],
    "stateMutability": "nonpayable",
    "type": "function"
  },
  {
    "inputs": [
      {
        "internalType": "string",
        "name": "receiver2",
        "type": "string"
      }
    ],
    "name": "setReceiver",
    "outputs": [],
    "stateMutability": "nonpayable",
    "type": "function"
  },
  {
    "inputs": [
      {
        "internalType": "string",
        "name": "sender2",
        "type": "string"
      }
    ],
    "name": "setSender",
    "outputs": [],
    "stateMutability": "nonpayable",
    "type": "function"
  },
  {
    "inputs": [
      {
        "internalType": "uint256",
        "name": "",
        "type": "uint256"
      }
    ],
    "name": "text",
    "outputs": [
      {
        "internalType": "string",
        "name": "",
        "type": "string"
      }
    ],
    "stateMutability": "view",
    "type": "function"
  }
];




const contract = new web3.eth.Contract(contractABI, contractAddress);

// Submit text to the smart contract
async function submitText(text,sender,receiver) {

    const accounts = await web3.eth.getAccounts();
  const fromAddress = accounts[0];

  const ara = text.split(" ");

  text2="";
  text3="";
  for(var k=0;k<ara.length;k++){
    text3=text2 + ara[k]+" ";

    if(text3.length>32){
      await contract.methods.set(text2).send({ from: fromAddress });
      await contract.methods.setSender(sender).send({ from: fromAddress });
      await contract.methods.setReceiver(receiver).send({ from: fromAddress });
      cnt=0;
      text2=ara[k]+" ";
    }
    else text2+=ara[k]+" ";
  }

  if(text2.length>0){
  await contract.methods.set(text2).send({ from: fromAddress });
  await contract.methods.setSender(sender).send({ from: fromAddress });
  await contract.methods.setReceiver(receiver).send({ from: fromAddress });
  }

}

async function retrieveText() {
   text = await contract.methods.get().call();
   sender = await contract.methods.getSender().call();
   receiver = await contract.methods.getReceiver().call();

    const sender2 = document.getElementById('sender');
    const receiver2 = document.getElementById('receiver');

    const sender3 = sender2.value;
    const receiver3 = user;

    var txt = document.getElementById("ta");
    var chat = document.getElementById("chat");
    
    var allText="";
    for( i=0;i<text.length;i++){
      var row = document.createElement("tr");
      var c1 = document.createElement("td");
      
      //alert(sender[i]);
      

      if(sender[i]==receiver3){
      //   while(sender[i]!==sender3){
      //   allText+=text[i];
      //   i++;
      // }
      c1.style.textAlign="left";
      c1.style.color = "black";
      c1.style.paddingLeft="20px";
      c1.style.backgroundColor="rgba(154, 185, 234, 0.64)";


      c1.innerText = text[i];
    //allText="";
      
      row.appendChild(c1);
      txt.appendChild(row);
    }
      

      else if(sender[i]==sender3 && receiver3!=""){
      //   while(sender[i]===sender3){
      //   allText+=text[i];
      //   i++;
      // }

      c1.style.textAlign="right";
      c1.style.color = "blue";
      c1.style.paddingRight="20px";
      c1.style.backgroundColor="rgba(104, 228, 234, 0.5)";


      c1.innerText = text[i];
    //allText="";
      
      row.appendChild(c1);
      txt.appendChild(row);
    }

    

      //chat.scrollTop(100);

      $(document).ready(function(){
  
        $("div").scrollTop(10000);
  
      });

    }
}


async function retrieveText2() {
   text = await contract.methods.get().call();

   sender = await contract.methods.getSender().call();
   receiver = await contract.methods.getReceiver().call();

    const sender2 = document.getElementById('sender');
    const receiver2 = document.getElementById('receiver');

    const sender3 = sender2.value;
    const receiver3 = user;

    var txt2 = document.getElementById("ta");
    var chat2 = document.getElementById("chat");
    //alert(i);
    for( j=i;j<text.length;j++){

      var row2 = document.createElement("tr");
      var c2 = document.createElement("td");
      c2.innerText = text[j];
      //alert(sender[i]);
      if(sender[j]!==sender3){
      c2.style.textAlign="left";
      c2.style.color = "black";
      c2.style.paddingRight="20px";
      c2.style.backgroundColor="rgba(154, 185, 234, 0.64)";
    }
      else if(sender[j]===sender3){
      c2.style.textAlign="right";
      c2.style.color = "blue";
      c2.style.paddingRight="20px";
      c2.style.backgroundColor="rgba(104, 228, 234, 0.5)";
    }
      
      row2.appendChild(c2);
      txt2.appendChild(row2);

      //chat.scrollTop(100);

      $(document).ready(function(){
  
        $("div").scrollTop(1000000000000);
        //$("div").scrollHeight;
  
      });

    }

    i=j;
}

//setInterval( retrieveText2, 2000);
//retrieveText2();



async function user(){
  
  // btn = document.querySelector(".btn2");
  // btn.onclick = function() {
  //               alert(btn.value);
  //           }
  // btn2 = document.getElementByClassName("btn");
  // name = btn2.value;
  //alert('name');
}



window.addEventListener('load', function () {
  // Check if Web3 is available
  if (typeof web3 !== 'undefined') {
    web3.eth.getAccounts(function (error, accounts) {
      if (error) {
        console.error(error);
      } else if (accounts.length === 0) {
        console.error('No accounts found');
      } else {
        web3.eth.defaultAccount = accounts[0] ;
        console.log(accounts[0]);
      }
    });
  } else {
    console.error('Web3 is not found. Make sure MetaMask or a compatible browser extension is installed.');
  }


  const btn = document.getElementById('user');
  btn.addEventListener('click', function(event) {
    //alert(event.target.value);
    //location.reload();

    btn2 = document.getElementsByTagName("button");

    for(k=0;k<btn2.length;k++)
      btn2[k].style.backgroundColor="";

    btn2 = document.getElementsByTagName("h5");

    for(k=0;k<btn2.length;k++)
      btn2[k].style.backgroundColor="";

    btn2 = document.getElementsByTagName("i");

    for(k=0;k<btn2.length;k++)
      btn2[k].style.backgroundColor="";

    const user = event.target.value;

    event.target.style.backgroundColor="green";

    retrieveText();
});



  // Handle form submission
  const form = document.getElementById('form');
  form.addEventListener('submit', function (event) {
    event.preventDefault();

    //user();

    const textInput = document.getElementById('text');
    const sender2 = document.getElementById('sender');
    const receiver2 = document.getElementById('receiver');

    const sender3 = sender2.value;
    const receiver3 = user;
    //alert(sender);

    const text = textInput.value.trim();
    if (text !== '') {
      //alert('Text submitted successfully!123');
      submitText(text,sender3,receiver3).then(function () {
        //alert('Text submitted successfully!');
        retrieveText2();
        textInput.value = '';
      }).catch(function (error) {
        console.error(error);
      });
    }
  });




});

