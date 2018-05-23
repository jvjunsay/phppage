
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Php LinkedInProspect Sample Page</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css">
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">

    <style>
      #example_wrapper {
        width: 95% !important;
        margin:auto;
      }
      pre {outline: 1px solid #ccc; padding: 5px; margin: 5px; }
      .string { color: green; }
      .number { color: darkorange; }
      .boolean { color: blue; }
      .null { color: magenta; }
      .key { color: red; }
    </style>
  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>Php Sample App</h2>
        <p class="lead">This is a LinkedInProspect test page</p>
      </div>

      <div class="col-md-12 order-md-1">
        <h4 class="mb-3">Linked In Credetials</h4>
        <form class="needs-validation" novalidate>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="userName">Linkedin UserName</label>
              <input type="email" class="form-control" id="userName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="lastName">Linkedin password</label>
              <input type="password" class="form-control" id="password" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
          </div>
          <div class="mb-3">
            <label for="proxy">Proxy</label>
            <input type="text" class="form-control" id="proxy" placeholder="" required>
            <div class="invalid-feedback">
              Please enter your shipping address.
            </div>
          </div>

          <div class="mb-3">
              <label for="searchURL">Search URL</label>
              <input type="text" class="form-control" id="searchURL" placeholder="" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>
          <button class="btn btn-primary btn-lg btn-block" id="searchButton" type="button">Search</button>
        </form>
      </div>


      <div id="toggle">
        
        <br /> <br />
         <div class="col-md-12 order-md-1">
          <h4 class="mb-3">Search Results</h4>
          <div class="row">
            <table id="example" class="display" style="width:100% !important;">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Current Job</th>
                        <th>Job</th>
                        <th>URL</th>
                        <th>Location</th>
                    </tr>
                </thead>
                <tbody id="results">
                    
                </tbody>                
            </table>
          </div>
        </div>  
        <br /> 
        <hr />
        <br />
        <div class="row">
          <div class="col-md-12 order-md-1">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" href="#connect" role="tab" data-toggle="tab">Connect</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#autoreply" role="tab" data-toggle="tab">Auto Reply</a>
              </li>
            </ul>

            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active in " id="connect">
                <br />
                <div class="col-md-12 order-md-1">
                  <h4 class="mb-3">Connect</h4>
                  <form class="needs-validation" novalidate>          
                   <div class="mb-3">
                     <label for="profileURL">Connect Profile URL</label>
                     <input type="text" class="form-control" id="profileURL" placeholder="" required>
                     <div class="invalid-feedback">
                       Please enter your shipping address.
                     </div>
                   </div>
         
                   <div class="mb-3">
                       <label for="searchURL">Connect Message</label>
                       <textarea id="connectMessage" class="form-control"></textarea>
                       <div class="invalid-feedback">
                         Please enter your shipping address.
                       </div>
                     </div>
                   <button class="btn btn-primary btn-lg btn-block" id="connectButton" type="button">Connect</button>
         
                   <button style="margin-top:10px;" class="btn btn-primary btn-lg btn-block" id="recentButton" type="button">Recently Connected</button>
         
                   <br />
                   <pre id="connectResponse">              
                       
                    </pre>
                 </form>
         
                </div>  

              </div>



              <div role="tabpanel" class="tab-pane fade" id="autoreply">
                <br />
                <div class="col-md-12 order-md-1">
                  <h4 class="mb-3">Auto Reply</h4>
                  <form class="needs-validation" novalidate>          
                   <div class="mb-3">
                     <label for="profileURL">Profile URL</label>
                     <input type="text" class="form-control" id="autoprofileURL" placeholder="" required>
                     <div class="invalid-feedback">
                       Please enter your shipping address.
                     </div>
                   </div>
         
                   <div class="mb-3">
                       <label for="searchURL">Message</label>
                       <textarea id="autoMessage" class="form-control"></textarea>
                       <div class="invalid-feedback">
                         Please enter your shipping address.
                       </div>
                     </div>
                   <button class="btn btn-primary btn-lg btn-block" id="autoReplyButton" type="button">Reply</button>
         
         
                   <br />
                   <pre id="autoResponse">              
                       
                    </pre>
                 </form>
         
                </div>  

              </div>
            </div>
          </div>
        </div>
      </div>
       
      </div>
      

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; Linkedprospect.com</p>
        
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script   src="https://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
 
    
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/holder.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <script>
        var tblExample;

        let instance = axios.create({
          baseURL: 'http://198.58.101.110:3000',
          headers: {'x-authentication':'jnMNQbUpFvBkpPdY'}
        });

        let fn = {
          autoReply : ()=>{
            loading('autoReplyButton',true);
            instance.post('/sendMessagesByUrl',{
              "messageList": [{
                  "url": $('#autoprofileURL').val(),
                  "message": $('#autoMessage').val()
                }]
            }).then((success)=>{
              console.log(success);   
              $('#autoResponse').html(JSON.stringify(success.data, undefined, 4));   
              loading('autoReplyButton',false);     
            })
            .catch((error)=>{
              console.log(error);
              loading('autoReplyButton',false);
            });
          },
          recentConnections: ()=>{
            loading('recentButton',true);
            instance.get('/recentConnections').then((success)=>{
              console.log(success);   
              $('#connectResponse').html(JSON.stringify(success.data, undefined, 4));  
              loading('recentButton',false);      
            })
            .catch((error)=>{
              console.log(error);
              loading('recentButton',false);
            });
          },
          connectProfile: () => {
            loading('connectButton',true);
            instance.post('/sendConnections',{
              "profilelist": [{
                  "url": $('#profileURL').val(),
                  "note": $('#connectMessage').val()
                }]
            }).then((success)=>{
              console.log(success);   
              $('#connectResponse').html(JSON.stringify(success.data, undefined, 4));   
              loading('connectButton',false);     
            })
            .catch((error)=>{
              console.log(error);
              loading('connectButton',false);
            });
          },
          fetchSearch: ()=> {
            let data = {
              "userAgent": "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.302",
              "httpProxy": $('#proxy').val(),
              "username": $('#userName').val(),
              "password": $('#password').val()
            }         

            loading('searchButton',true);
            instance.get('/status').then((success)=>{
              if(success.data.apiStatus=='ready' && success.data.currentUser == $('#userName').val()){
                instance.post('/searchbyUrls',{
                  "urls": [$('#searchURL').val()],
                  "numberOfPage": 1,
                  "start": 1
                }).then((success)=>{
                  console.log(success);
                  fillResults(success.data);
                  loading('searchButton',false);
                  $('#toggle').show();
                });
              }else{
                instance.post('/login',data).then((response)=>{
                  instance.post('/searchbyUrls',{
                    "urls": [$('#searchURL').val()],
                    "numberOfPage": 1,
                    "start": 1
                  }).then((success)=>{
                    console.log(success);
                    fillResults(success.data);
                    loading('searchButton',false);
                    $('#toggle').show();
                  })
                }).
                catch((error)=>{
                  console.log(error);
                  loading('searchButton',false);
                  $('#toggle').show();
                });
              }
            }); 
          }
        }

        $(document).ready(()=>{          
            tblExample = $('#example').DataTable();
            $('#toggle').hide();
            $('#searchButton').on('click',()=>{   
              fn.fetchSearch();              
            });

            $('#connectButton').on('click',()=>{             
              fn.connectProfile();
            })

            $('#recentButton').on('click',()=>{
              fn.recentConnections();
            });

            $('#autoReplyButton').on('click',()=>{
              fn.autoReply();
            });
        });

        function loading(btn,isLoading) {
          var $this = $('#' + btn);
          if(isLoading) {            
            var loadingText = '<i class="fa fa-circle-o-notch fa-spin"></i> loading...';
            if ($('#' + btn).html() !== loadingText) {
              $this.data('original-text',$('#' + btn).html());
              $this.html(loadingText);
              $('#' + btn).prop('disabled',true);
            }
          }else{
            $this.html($this.data('original-text'));
            $('#' + btn).prop('disabled',false);
          }          
        }

        function fillResults(data){          
          tblExample.destroy();
          tblExample = $('#example').DataTable({
            data: data,
            columns: [
                { data: 'name' },
                { data: 'currentJob' },
                { data: 'job' },
                { data: 'url' },
                {data: 'location'}
            ]
          });         

        }
        
    </script>
  </body>
</html>
