// Connect to Ethereum network using Web3.js

var i=0,j=0;
const web3 = new Web3(Web3.currentProvider || 'http://localhost:7545');


const contract = new web3.eth.Contract(contractABI, contractAddress);

// Submit text to the smart contract
async function signup(username,password) {

  const accounts = await web3.eth.getAccounts();
  const fromAddress = accounts[0];

  await contract.methods.setUsername(username).send({ from: fromAddress });
  await contract.methods.setPassword(password).send({ from: fromAddress }); 

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




// signup start
  //const signup = document.getElementById('signup');
  addEventListener('submit', function (event) {
    event.preventDefault();

    //user();
    //alert("signup");

    const email = document.getElementById('email').value;
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;


    //const text = textInput.value.trim();
    if (email !== '') {
      //alert('Text submitted successfully!123');
      signup(username,password).then(function () {
        alert('Signup successfully!');
        //textInput.value = '';
      }).catch(function (error) {
        console.error(error);
      });
    }
  });







});

