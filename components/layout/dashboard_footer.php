                
            </div>
        </div>
    </div>

    <script>
        // click outside then .dashboard-sidbar then remove active
        document.addEventListener('click', function(e){
            //event target contain hamburger class or event target all parent contain hamburger class
            if(!e.target.classList.contains('dashboard-sidebar') && !(e.target.classList.contains('hamburger') || e.target.parentElement.classList.contains('hamburger'))){
                document.querySelector('.dashboard-sidebar').classList.remove('active');
            }
        })
        function toggleSidebar(){
            document.querySelector('.dashboard-sidebar').classList.toggle('active');
        }

        function toggleOptions(){
            document.querySelector('.dropdown-item').classList.toggle('active');
        }
    </script>
</body>
</html>