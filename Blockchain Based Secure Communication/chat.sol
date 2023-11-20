// SPDX-License-Identifier: MIT
pragma solidity ^0.8.7;

contract chat{

    string [] public text;
    string [] public sender;
    string [] public receiver;

    function set(string memory test2, string memory sender2, string memory receiver2) public{

        text.push(test2);
        sender.push(sender2);
        receiver.push(receiver2);
    }

    function get() public view returns(string[] memory) {

        return text;
    }

    function getSender() public view returns(string[] memory) {

        return sender;
    }

    function getReceiver() public view returns(string[] memory) {

        return receiver;
    }

    function pos(uint i) public view returns(string memory) {

        return text[i];
    }
}

