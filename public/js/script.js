// function idle() {
//     let timeoutId;
//     timeoutId = setTimeout(function () {
//         // user is idle for 5 sec
//         fetch('{{ route("offline") }}')
//             .then((response) => response.text())
//             .then((data) => {
//                 // handle the response
//             });
//     }, 5000);

//     $("*").bind(
//         "mousemove click mouseup mousedown keydown keypress keyup submit change mouseenter scroll resize dblclick",
//         function () {
//             clearTimeout(timeoutId);
//             // user is not idle
//             fetch('{{ route("online") }}')
//                 .then((response) => response.text())
//                 .then((data) => {
//                     // handle the response
//                 });
//         }
//     );
// }
// window.setInterval(function () {
//     idle();
// }, 5000);
