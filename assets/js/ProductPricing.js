function myFunction() {
   /*Product1*/
   let PTP_VALUE1 = document.getElementById("PT_myProduct1");
   let PQV_Value1 = parseInt(document.getElementById("myProduct1_Quantity").value);
   // 
   let tdElem_Price1 = document.getElementById("PP_myProduct1");
   let PP_Value1 = (parseInt(tdElem_Price1.innerText));
   let Final_PTP1 = (PQV_Value1 * PP_Value1);
   // console.log(Final_PTP1);
   let Product1 = parseInt(PTP_VALUE1.innerText = Final_PTP1 + "$");

   /*Product2*/
   let PTP_VALUE2 = document.getElementById("PT_myProduct2");
   let PQV_Value2 = parseInt(document.getElementById("myProduct2_Quantity").value);
   // 
   let tdElem_Price2 = document.getElementById("PP_myProduct2");
   let PP_Value2 = (parseInt(tdElem_Price2.innerText));
   let Final_PTP2 = (PQV_Value2 * PP_Value2);
   // console.log(Final_PTP2);
   let Product2 = parseInt(PTP_VALUE2.innerText = Final_PTP2 + "$");

   /*Product3*/
   let PTP_VALUE3 = document.getElementById("PT_myProduct3");
   let PQV_Value3 = parseInt(document.getElementById("myProduct3_Quantity").value);
   // 
   let tdElem_Price3 = document.getElementById("PP_myProduct3");
   let PP_Value3 = (parseInt(tdElem_Price3.innerText));
   let Final_PTP3 = (PQV_Value3 * PP_Value3);
   // console.log(Final_PTP3);
   let Product3 = parseInt(PTP_VALUE3.innerText = Final_PTP3 + "$");

   /*Product4*/
   let PTP_VALUE4 = document.getElementById("PT_myProduct4");
   let PQV_Value4 = parseInt(document.getElementById("myProduct4_Quantity").value);
   // 
   let tdElem_Price4 = document.getElementById("PP_myProduct4");
   let PP_Value4 = (parseInt(tdElem_Price4.innerText));
   let Final_PTP4 = (PQV_Value4 * PP_Value4);
   // console.log(Final_PTP4);
   let Product4 = parseInt(PTP_VALUE4.innerText = Final_PTP4 + "$");

   /*Product5*/
   let PTP_VALUE5 = document.getElementById("PT_myProduct5");
   let PQV_Value5 = parseInt(document.getElementById("myProduct5_Quantity").value);
   // 
   let tdElem_Price5 = document.getElementById("PP_myProduct5");
   let PP_Value5 = (parseInt(tdElem_Price5.innerText));
   let Final_PTP5 = (PQV_Value5 * PP_Value5);
   // console.log(Final_PTP5);
   let Product5 = parseInt(PTP_VALUE5.innerText = Final_PTP5 + "$");

   /*Product6*/
   let PTP_VALUE6 = document.getElementById("PT_myProduct6");
   let PQV_Value6 = parseInt(document.getElementById("myProduct6_Quantity").value);
   // 
   let tdElem_Price6 = document.getElementById("PP_myProduct6");
   let PP_Value6 = (parseInt(tdElem_Price6.innerText));
   let Final_PTP6 = (PQV_Value6 * PP_Value6);
   //    console.log(Final_PTP6);
   let Product6 = parseInt(PTP_VALUE6.innerText = Final_PTP6 + "$");
//subtotal
   let TheSubTotal = document.getElementById("subtotal");
   let gettingTheSubTotal = Final_PTP1 + Final_PTP2 + Final_PTP3 + Final_PTP4 + Final_PTP5 + Final_PTP6;
   TheSubTotal.innerText = gettingTheSubTotal + "$"


   //total
let shipping = document.getElementById("shipping");
let shippingvalue = parseInt(shipping.innerText);
let total=document.getElementById("total");

let shippingANDsubtotal=gettingTheSubTotal+shippingvalue;
total.innerText=shippingANDsubtotal+"$";



  
}