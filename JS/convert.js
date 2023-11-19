  //Binary to Decimal
function bintodec(binaryNumber) {
    var decimalNumber = parseInt(binaryNumber, 2);
    return decimalNumber;
}
function convertBintoDeci() {
    var bintodeciInput = document.getElementById("bintodeciInput").value;
    var decimalResult = bintodec(bintodeciInput);
    document.getElementById("deci").innerText =  decimalResult + "₁₀";
}
  //Binary to octal
function binToOct(binaryNumber) {
  
    var decimalNumber = parseInt(binaryNumber, 2);
    var octalNumber = decimalToOctal(decimalNumber);
    return octalNumber;
}
function decimalToOctal(decimalNumber) {
    var octalNumber = decimalNumber.toString(8);
    return octalNumber;
}
function convertBintoOctal(){
    var bintooctalInput = document.getElementById("bintooctalInput").value;
    var octalResult = binToOct(bintooctalInput);
    document.getElementById("octa").innerText = octalResult + "₈";
   
}
  //Binary to hexadecimal
function binToHexa(binaryNumber) {
    var decimalNumber = parseInt(binaryNumber, 2);
    var hexadecimalNumber = decimalToHexadecimal(decimalNumber);
    return hexadecimalNumber;
}
function decimalToHexadecimal(decimalNumber) {
    var hexadecimalNumber = decimalNumber.toString(16).toUpperCase();
    return hexadecimalNumber;
}
function convertBintoHexa() {
    var hexaInput = document.getElementById("hexaInput").value;
    var hexadecimalResult = binToHexa(hexaInput);
    document.getElementById("hexa").innerText = hexadecimalResult + "₁₆";

}
  //Decimal to binary
function convertDecitoBin() {
    const decimalNumber = document.getElementById('decimalInput').value;
    const decitobinary= decimalToBinary(decimalNumber);
    document.getElementById('decitobinary').innerText = `${decitobinary}` + "₂";
}
function decimalToBinary(decimalNumber) {
    if (isNaN(decimalNumber) || decimalNumber < 0 || decimalNumber % 1 !== 0) {
        return "Invalid input. Please enter a non-negative integer.";
    }
    else if (isNaN(decimalNumber) || decimalNumber == 0) {
        return "0";
    }
    if (decimalNumber === 0) {
        return "0";
    }
    let binary = "";

    while (decimalNumber > 0) {
        binary = (decimalNumber % 2) + binary;
        decimalNumber = Math.floor(decimalNumber / 2);
    }
    return binary;
}
  //Decimal to octal
function decitooct() {
    var decitooctalInput = document.getElementById('decitooctalInput').value;

    if (!isNaN(decitooctalInput)) {
        var octalOutput = parseInt(decitooctalInput, 10).toString(8);
        document.getElementById('octalOutput').textContent = octalOutput  + "₈";
    } else {
        document.getElementById('octalOutput').textContent = 'Invalid input. Please enter a valid decimal number.';
    }
}
  //Decimal to hexa
  function decimalToHex(hexaNumber) {
    var hexString = hexaNumber.toString(16).toUpperCase();
    
    return hexString;
}

function convertDecitoHexa(){
    var hexatodeciInput = document.getElementById("hexatodeciInput").value;
    if (hexatodeciInput === "" || isNaN(hexatodeciInput)) {
        return;
    }
    var hexatodecimal = decimalToHex(parseInt(hexatodeciInput, 10));
    document.getElementById("hexaOutput").textContent =  hexatodecimal  + "₁₆";
}
function bintodecimal(){
    document.getElementById("bintodeci").style.display="block";
    document.getElementById("bintodeciInput").value = "";
    document.getElementById("deci").innerHTML = "";
    document.getElementById("decitohexa").style.display="none";
    document.getElementById("bintooctal").style.display="none";
    document.getElementById("bintohexa").style.display="none";
    document.getElementById("decitobin").style.display="none";
    document.getElementById("decitooctal").style.display="none";
}
function bintooctal(){
    document.getElementById("bintooctal").style.display="block";
    document.getElementById("bintooctalInput").value = "";
    document.getElementById("octa").innerHTML = "";
    document.getElementById("decitohexa").style.display="none";
    document.getElementById("bintodeci").style.display="none";
    document.getElementById("bintohexa").style.display="none";
    document.getElementById("decitobin").style.display="none";
    document.getElementById("decitooctal").style.display="none";
}
function bintohexa(){
    document.getElementById("bintohexa").style.display="block";
    document.getElementById("hexaInput").value = "";
    document.getElementById("hexa").innerHTML = "";
    document.getElementById("decitohexa").style.display="none";
    document.getElementById("bintooctal").style.display="none";
    document.getElementById("bintodeci").style.display="none";
    document.getElementById("decitobin").style.display="none";
    document.getElementById("decitooctal").style.display="none";
}
function decitobinary(){
    document.getElementById("decitobin").style.display="block";
    document.getElementById("decimalInput").value = "";
    document.getElementById("decitobinary").innerHTML = "";
    document.getElementById("decitohexa").style.display="none";
    document.getElementById("bintooctal").style.display="none";
    document.getElementById("bintodeci").style.display="none";
    document.getElementById("bintohexa").style.display="none";
    document.getElementById("decitooctal").style.display="none";
}
function decitooctal(){
    document.getElementById("decitooctal").style.display="block";
    document.getElementById("decitooctalInput").value = "";
    document.getElementById("octalOutput").innerHTML = "";
    document.getElementById("decitohexa").style.display="none";
    document.getElementById("bintodeci").style.display="none";
    document.getElementById("bintooctal").style.display="none";
    document.getElementById("bintohexa").style.display="none";
    document.getElementById("decitobin").style.display="none";
}
function decitohexa(){
    document.getElementById("decitohexa").style.display="block";
    document.getElementById("decitooctal").style.display="none";
    document.getElementById("hexatodeciInput").value = "";
    document.getElementById("hexaOutput").innerHTML = "";
    document.getElementById("bintodeci").style.display="none";
    document.getElementById("bintooctal").style.display="none";
    document.getElementById("bintohexa").style.display="none";
    document.getElementById("decitobin").style.display="none";
}