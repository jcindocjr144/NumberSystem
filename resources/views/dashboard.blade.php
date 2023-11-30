@extends("layouts.layout")

@section("title","Number System Convertion")

@section("content")
<x-app-layout>
<h1 class="mt-5 text-center num text-warning">NUMBER SYSTEM CONVERTION</h1>
<button onclick="clearAll()" class="btn btn-danger ms-5" style="width:100px;">Clear All</button>
<!---Binary to decimal-->
<div class="text-dark d-flex align-items-center justify-content-center">
<div id="bintodeci" class="mt-5 text-center" style="display:none;">
    <h1 class="mt-2">Binary to Decimal</h1>
    Binary:
    <input type="text" id="bintodeciInput" class="mt-3 rounded-2 text-dark" placeholder="0">
    <button onclick="convertBintoDeci()" class="rounded-2 text-light btn btn-primary">Convert</button>
    <p class="text-white bg-dark">Decimal: <span style="font-size:20px;" id="deci"></span></p>
  </div>

 <!---Binary to Octal--> 
  <div id="bintooctal" class="mt-5 text-center" style="display:none;">
    <h1 class="mt-2">Binary to Octal Decimal</h1>
    <label for="bintooctalInput">Binary: </label>
    <input type="text" id="bintooctalInput" class="mt-3 rounded-2 text-dark" placeholder="0">
    <button onclick="convertBintoOctal()" class="rounded-2 text-light btn btn-primary">Convert</button>
    <p class="text-white bg-dark">Octal Decimal: <span style="font-size:20px;" id="octa"></span></p>
  </div>

<!---Binary to Hexa decimal-->
  <div id="bintohexa" class="mt-5 text-center" style="display:none;">
    <h1 class="mt-2">Binary to Hexa Decimal</h1>
    <label for="hexaInput">Binary: </label>
    <input type="text" id="hexaInput" class="mt-3 rounded-2 text-dark" placeholder="0">
    <button onclick="convertBintoHexa()" class="rounded-2 text-light btn btn-primary">Convert</button>
    <p class="text-white bg-dark">Hexa Decimal: <span style="font-size:20px;" id="hexa"></span></p>
  </div>
  
<!---Decimal to Binary-->
  <div id="decitobin" class="mt-5 text-center" style="display:none;">
    <h1 class="mt-2">Decimal to Binary</h1>
    <label for="decimalInput">Decimal:</label>
    <input type="text" id="decimalInput" class="mt-3 rounded-2 text-dark" placeholder="0">
    <button onclick="convertDecitoBin()" class="rounded-2 text-light btn btn-primary">Convert</button>
    <p class="text-white bg-dark">Binary: <span style="font-size:20px;" id="decitobinary"></span></p>
  </div>

<!---Decimal to Octal-->
  <div id="decitooctal" class="mt-5 text-center" style="display:none;">
<h1 class="mt-2">Decimal to Octal Decimal</h1>
<label for="decitooctalInput">Decimal:</label>
<input type="text" id="decitooctalInput" class="mt-3 rounded-2 text-dark" placeholder="0">
<button onclick="decitooct()" class="rounded-2 text-light btn btn-primary">Convert</button>
<p class="text-white bg-dark">Octal: <span span style="font-size:20px;" id="octalOutput"></span></p>
</div>

<!---Decimal to Hexa Decimal-->
<div id="decitohexa" class="mt-5 text-center" style="display:none;">
<h1 class="mt-2">Decimal to Hexa Decimal</h1>
<label for="decitohexaInput">Decimal: </label>
<input type="text" id="decitohexaInput" class="mt-3 rounded-2 text-dark" placeholder="0">
<button onclick="convertDecitoHexa()"  class="rounded-2 text-light btn btn-primary">Convert</button>
<p class="text-white bg-dark">Hexadecimal: <span span style="font-size:20px;"id="hexaOutput"></span></p>
</div>

<!---Octal to bin-->
<div id="octaltobin" class="mt-5 text-center" style="display:none;">
  <h1 class="mt-2">Octal to Binary</h1>
  <label for="octaltobinaryInput">Octal: </label>
  <input type="text" id="octaltobinaryInput" class="mt-3 rounded-2 text-dark" placeholder="0">
  <button onclick="convertOctaltoBin()" class="rounded-2 text-light btn btn-primary">Convert</button>
  <p class="text-white bg-dark">Binary:<span span style="font-size:20px;" id="octaltobinaryOutput"></span></p>
  </div>

<!---Octal to Decimal-->
<div id="octaltodeci" class="mt-5 text-center" style="display:none;">
  <h1 class="mt-2">Octal to Decimal</h1>
  <label for="octaltodeciInput">Octal: </label>
  <input type="text" id="octaltodeciInput" class="mt-3 rounded-2 text-dark" placeholder="0">
  <button onclick="convertOctalToDeci()" class="rounded-2 text-light btn btn-primary">Convert</button>
  <p class="text-white bg-dark">Decimal: <span span style="font-size:20px;" id="octaltodeciOutput"></span></p>
  </div>

<!---Octal to Hexa Decimal-->
  <div id="octaltohex" class="mt-5 text-center" style="display:none;">
    <h1 class="mt-2">Octal to Hexa Decimal</h1>
    <label for="octaltohexaInput">Octal: </label>
    <input type="text" id="octaltohexaInput" class="mt-3 rounded-2 text-dark" placeholder="0">
    <button onclick="convertOctalToHexa()" class="rounded-2 text-light btn btn-primary">Convert</button>
    <p class="text-white bg-dark">Hexa Decimal: <span span style="font-size:20px;" id="octaltohexaOutput"></span></p>
    </div>

<!---Hexa Decimal to Binary-->
   <div id="hexatobin" class="mt-5 text-center" style="display:none;">
    <h1 class="mt-2">Hexadecimal to Binary</h1>
<label for="hexatobinInput">Hexadecimal: </label>
<input type="text" id="hexatobinInput"  class="mt-3 rounded-2 text-dark" placeholder="0">
<button onclick="convertHexToBinary()" class="rounded-2 text-light btn btn-primary">Convert</button>
<p class="text-white bg-dark">Binary: <span span style="font-size:20px;" id="hexatobinOutput"></span></p>
    </div>

<!---Hexa Decimal to Decimal-->
   <div id="hexatodeci" class="mt-5 text-center" style="display:none;">
    <h1 class="mt-2">Hexadecimal to Decimal</h1>
<label for="hexatodeciInput">Hexadecimal: </label>
<input type="text" id="hexatodeciInput"  class="mt-3 rounded-2 text-dark" placeholder="0">
<button onclick="convertHexaToDecimal()" class="rounded-2 text-light btn btn-primary">Convert</button>
<p class="text-white bg-dark">Decimal: <span span style="font-size:20px;" id="hexatodeciOutput"></span></p>
    </div>

<!---Hexa Decimal to Octal-->
<div id="hexatooct" class="mt-5 text-center" style="display:none;">
  <h1 class="mt-2">Hexadecimal to Octal</h1>
<label for="hexatooctalInput">Hexadecimal: </label>
<input type="text" id="hexatooctalInput"  class="mt-3 rounded-2 text-dark" placeholder="0">
<button onclick="convertHexaToOctal()" class="rounded-2 text-light btn btn-primary">Convert</button>
<p class="text-white bg-dark">Decimal: <span span style="font-size:20px;" id="hexatooctalOutput"></span></p>
  </div>
</div> 

  <div class="container mt-5">
    <div class="text-center row text-dark">
<!---Binary-->
      <div class="col-lg-3 col-6">
        <div class="binary rounded-5">
          <h1 class="mt-4 text-white text">1001₂</h1>
          <p class="text-white text">BINARY</p>
          <div class="dropdown">
            <button class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">
             BINARY
            </button> 
            <ul class="dropdown-menu bg-warning">
              <li><a class="dropdown-item" onclick="bintodecimal()">BINARY TO DECIMAL</a></li>
              <li><a class="dropdown-item" onclick="bintooctal()">BINARY TO OCTAL DECIMAL</a></li>
              <li><a class="dropdown-item" onclick="bintohexa()">BINARY TO HEXA DECIMAL</a></li>
            </ul>
          </div>
        </div></div>
<!---Decimal-->
      <div class="col-lg-3 col-6">
        <div class="decimal rounded-5">
        <h1 class="mt-4 text">143₁₀</h1>
        <p class=" text text-dark">DECIMAL</p>
        <div class="dropdown">
        <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown">
          DECIMAL
         </button> 
         <ul class="dropdown-menu bg-warning">
           <li><a class="dropdown-item" onclick="decitobinary()">DECIMAL TO BINARY</a></li>
           <li><a class="dropdown-item" onclick="decitooctal()">DECIMAL TO OCTAL</a></li>
           <li><a class="dropdown-item" onclick="decitohexa()">DECIMAL TO HEXA DECIMAL</a></li>
         </ul>
       </div></div></div>
<!---Octal-->
      <div class="col-lg-3 col-6">
        <div class="octal rounded-5">
          <h1 class="mt-4 text-white text">777₈</h1>
        <p class="text text-warning">OCTAL</p>
        <div class="dropdown">
          <button  class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown">
            OCTAL
           </button> 
           <ul class="dropdown-menu bg-warning">
             <li><a class="dropdown-item" onclick="octaltobinary()">OCTAL TO BINARY</a></li>
             <li><a class="dropdown-item" onclick="octaltodecimal()">OCTAL TO DECIMAL</a></li>
             <li><a class="dropdown-item" onclick="octaltohexa()">OCTAL TO HEXA DECIMAL</a></li>
           </ul>
         </div></div></div>
<!---Hexa-->
      <div class="col-lg-3 col-6">
        <div class="hexa rounded-5">
          <h1 class="mt-4 text-white text">ABC₁₆</h1>
        <p class="text text-dark">HEXA</p>
        <div class="dropdown">
          <button  class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown">
            HEXA DECIMAL
           </button> 
           <ul class="dropdown-menu bg-warning">
             <li><a class="dropdown-item" onclick="hexatobinary()">HEXA DECIMAL TO BINARY</a></li>
             <li><a class="dropdown-item" onclick="hexatodecimal()">HEXA DECIMAL TO DECIMAL</a></li>
             <li><a class="dropdown-item" onclick="hexatooctal()">HEXA DECIMAL TO OCTAL</a></li>
           </ul>
         </div></div></div>
    </div>
  </div>
</x-app-layout>
@endsection