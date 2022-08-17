
                        function Calcul()
                        {
                        let a = document.getElementById('id1').value ;
                        let b = document.getElementById('id2').value ;
                        let c = document.getElementById('id3').value ;
                        document.getElementById('id4').value =  parseFloat(a) * parseFloat(b) * parseFloat(c);
                        };
                        function CalculA(){
                                let a = document.getElementById('id11').value ;
                                let b = document.getElementById('id22').value ;
                                document.getElementById('id5').value =  parseFloat(a) * parseFloat(b);
                        };
                        function CalculP(){
                                let a = document.getElementById('mc').value ;
                                let pBrique = 85;
                                document.getElementById('cPrix').value =  parseFloat(a) * parseFloat(pBrique) ;
                        };
                        function CalculPa(){
                           let a = document.getElementById('mca').value ;
                           let pParpaing = 50;
                                 document.getElementById('cPrixa').value =  parseFloat(a) * parseFloat(pParpaing) ;
                        };
                        function CalculcMcBeton(){
                                let a = document.getElementById('mcB').value ;
                                let pParpaing = 50;
                                      document.getElementById('cPrixa').value =  parseFloat(a) * parseFloat(pParpaing) ;
                             };
                                   
                             function CalculMcBeton(){
                                let a = document.getElementById('mcBeton').value ;
                                let pParpaing = 50;
                                      document.getElementById('cMcbeton').value =  parseFloat(a) * parseFloat(pParpaing) ;
                             };