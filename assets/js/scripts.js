import $ from 'jquery';
console.log("hello")
document.addEventListener("DOMContentLoaded", function(){
  // Handler when the DOM is fully loaded
  $(() => {
    // Kod jQuery po załadowaniu strony
  
    // Przykład: wyświetlenie tekstu "Hello World!" w elemencie o identyfikatorze "message"
    $("#message").text("Hello World!");
  });
});
