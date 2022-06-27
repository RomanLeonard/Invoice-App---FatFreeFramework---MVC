// $(document).ready(function(){

//     $.ajax({
//         method: "POST",
//         url: "get-statistics",
//         dataType: "json",
//         data: {
//             'AJAX': true,
//             'type': 'statistics',
//         }
//     })
//     .done(function( data ) {
//         var statistics = $.map(data, function(value, index) {
//             // return [value];

//             $('.statistics').append(`
//                 <!-- statistic card -->
//                 <div class="col-12 col-lg-6">
//                     <div class="card">
//                         <div class="card-body">
//                             <canvas id="chart_`+index+`" width="100%" height="50px" class="chart"></canvas>
//                         </div>
//                     </div>
//                 </div> 
//                 <!-- ./statistic card -->
//             `)


//             $('.chart').each(function(index){
//                 const ctx = $(this).attr('id').getContext('2d');

//                 const myChart = new Chart(ctx, {
//                     type: 'bar',
//                     data: {
//                         labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'Obtober', 'September', 'November', 'December'],
//                         datasets: [{
//                             label: 'income',
//                             data: [12, 19, 3, 5, 2, 3, 2,3,1,2],
//                             backgroundColor: [
//                                 'rgba(255, 99, 132, 0.2)',
//                                 'rgba(54, 162, 235, 0.2)',
//                                 'rgba(255, 206, 86, 0.2)',
//                                 'rgba(75, 192, 192, 0.2)',
//                                 'rgba(153, 102, 255, 0.2)',
//                                 'rgba(255, 159, 64, 0.2)'
//                             ],
//                             borderColor: [
//                                 'rgba(255, 99, 132, 1)',
//                                 'rgba(54, 162, 235, 1)',
//                                 'rgba(255, 206, 86, 1)',
//                                 'rgba(75, 192, 192, 1)',
//                                 'rgba(153, 102, 255, 1)',
//                                 'rgba(255, 159, 64, 1)'
//                             ],
//                             borderWidth: 1
//                         }]
//                     },
//                     options: {
//                         scales: {
//                             y: {
//                                 beginAtZero: true
//                             }
//                         }
//                     }
//                 });
//             })

           


//         });
        


        
//         // $(statistics).each(function(i, statistics_obj) {
//         //     var statistic = $.map(statistics_obj, function(value, index) {
                

                
//         //         return [index];
//         //     });
//         // });

        
        
//     });

// });


// // <!-- statistic card -->
// // <div class="col-12 col-lg-6">
// // <div class="card">
// //     <div class="card-body">
// //         <canvas id="myChart" width="100%" height="50px"></canvas>
// //     </div>
// // </div>
// // </div> <!-- ./statistic card -->





// // const ctx = document.getElementById('myChart').getContext('2d');
// // const myChart = new Chart(ctx, {
// //     type: 'bar',
// //     data: {
// //         labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'Obtober', 'September', 'November', 'December'],
// //         datasets: [{
// //             label: 'income',
// //             data: [12, 19, 3, 5, 2, 3, 2,3,1,2],
// //             backgroundColor: [
// //                 'rgba(255, 99, 132, 0.2)',
// //                 'rgba(54, 162, 235, 0.2)',
// //                 'rgba(255, 206, 86, 0.2)',
// //                 'rgba(75, 192, 192, 0.2)',
// //                 'rgba(153, 102, 255, 0.2)',
// //                 'rgba(255, 159, 64, 0.2)'
// //             ],
// //             borderColor: [
// //                 'rgba(255, 99, 132, 1)',
// //                 'rgba(54, 162, 235, 1)',
// //                 'rgba(255, 206, 86, 1)',
// //                 'rgba(75, 192, 192, 1)',
// //                 'rgba(153, 102, 255, 1)',
// //                 'rgba(255, 159, 64, 1)'
// //             ],
// //             borderWidth: 1
// //         }]
// //     },
// //     options: {
// //         scales: {
// //             y: {
// //                 beginAtZero: true
// //             }
// //         }
// //     }
// // });