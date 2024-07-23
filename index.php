<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Your Website</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>

<style>
/* General Styles */
@import url('https://fonts.googleapis.com/css?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  text-decoration: none;
  border: none;
  outline: none;
  scroll-behavior: smooth;
  font-family: 'Poppins', sans-serif;
}



html {
  font-size: 62.5%;
  overflow-x: hidden;
}

/* Section 1 Styles */

#home {
  background: linear-gradient(135deg, #5943F4, #F45B43); 
  color: #FFFFFF; 
  backdrop-filter: blur(10px);
  padding: 20px;
  padding-bottom: 100px;
}


#home .logo {
    text-align: center;
    display: flex;
    justify-content: center;
    flex-wrap: nowrap;
    gap: 40px;
    margin-bottom: 40px;
}

#home .logo h1 {
  font-size: 35px; /* Using viewport width units for responsiveness */
  font-weight: bold;
  color: white;
  margin-top: 10px;
}

#home .logo h2 {
  font-size: 2vw; /* Using viewport width units for responsiveness */
  color: white;
  margin-top: 20px;
}

#home .slogan-menu {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 30px;
}

#home .slogan {
  flex:1;
  color: #CCF4E5;
  text-align: center;
  margin-bottom: 30px;
  font-size: 35px; /* Using viewport width units for responsiveness */
  position: relative; /* Required for positioning the image */
}

#home .menu {
  flex: 1; /* Take up remaining space */
  margin: 0 30px;
  background-color: #000080;
  border-radius: 40px;
  padding: 35px;
  text-align: center;
}

#home .menu ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#home .menu ul li {
  padding: 20px 0;
  font-size: 20px; /* Using viewport width units for responsiveness */
  font-weight: bold;
  color: white;
  border-bottom: 2px solid rgba(255, 255, 255, 0.5);
}

#home .menu ul li:last-child {
  border-bottom: none;
}

#home .menu ul li:hover {
  background-color: #0000a0;
  cursor: pointer;
}

#home .image {

  margin-top: 10px;
  transform: translateX(-50%); /* Center horizontally */
  width: 200px;
  height: auto;
  animation: slide-in 1s ease forwards;
  background-color: transparent; /* Set background to transparent */
}

@keyframes slide-in {
  from {
    transform: translateY(100%);
    opacity: 0;
  }
  to {
    transform: translateY(0);
    opacity: 1;
  }
}

#typing-text {
  white-space: nowrap;
  overflow: hidden;
  animation: wave 2s linear infinite, color-change 8s infinite; /* Combining wave and color-change animations */
}

@keyframes wave {
  0% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-10%);
  }
  100% {
    transform: translateY(0);
  }
}

@keyframes color-change {
  0% {
    color: #ff0000; /* Red */
  }
  25% {
    color: #ffa500; /* Orange */
  }
  50% {
    color: #ffff00; /* Yellow */
  }
  75% {
    color: #19ff19; /* Green */
  }
  100% {
    color: #fe46e2; /* Violet */
  }
}

/* Media Queries */
@media (max-width: 768px) {
  #home .logo,
  #home .slogan-menu,
  #home .menu,
  #home .image {
    flex-direction: column;
    align-items: center;
    text-align: center;
  }
}

@media (max-width: 480px) {
  #home .logo h1 {
    font-size: 12vw; /* Further adjusted font size */
  }

  #home .logo h2 {
    font-size: 7vw; /* Further adjusted font size */
  }

  #home .slogan {
    font-size: 10vw; /* Further adjusted font size */
  }

  #home .menu ul li {
    font-size: 5vw; /* Further adjusted font size */
  }
}





#home4 {
  background: linear-gradient(135deg, #5943F4, #abaddb);
  color: #fff;
  padding: 20px;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  overflow: hidden; /* Ensure all contents are visible */
}

#home4::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: repeating-linear-gradient(
    45deg,
    rgba(255, 255, 255, 0.1),
    rgba(255, 255, 255, 0.1) 10px,
    transparent 10px,
    transparent 20px
  ); /* Animated background strip */
  animation: animateStrip 2s linear infinite;
  z-index: -1; /* Behind other content */
}

@keyframes animateStrip {
  0% {
    background-position: 0 0;
  }
  100% {
    background-position: 20px 20px;
  }
}

#home4 .container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  height: 100%; /* Ensure container fills the height of the section */
}

#home4 .content {
  flex: 1;
  padding: 20px;
  opacity: 0; /* Initially hidden */
  transform: scale(0.9); /* Initially scaled down */
  transition: opacity 0.5s, transform 0.5s; /* Smooth transition */
}

#home4 .content h2 {
  font-size: 3.5rem;
  margin-top: 20px;
  margin-left: -5px;
  font-weight: bold;
} /* Increase text size */


#home4 .content p {
  font-size: 2.1rem; /* Increase text size */
}

#home4 .image-container {
  flex: 1;
  text-align: center;
  position: relative;
}

#home4 img {
  max-width: 100%;
  height: auto;
  border-radius: 10px;
  border: 2px solid transparent;
  position: relative;
  z-index: 1;
  animation: floatAnimation 5s infinite alternate; /* Floating animation */
}

@keyframes floatAnimation {
  from {
    transform: translateY(0);
  }
  to {
    transform: translateY(-20px);
  }
}

#home4.in-view .content {
  opacity: 1; /* Show when in view */
  transform: scale(1); /* Scale to normal size */
}

@media only screen and (max-width: 1200px) {
  /* Adjustments for smaller screens */
  #home4 .content h2 {
    font-size: 3.5rem;
  margin-top: 20px;
  margin-left: -5px;
  font-weight: bold;
} /* Decrease text size */
  

  #home4 .content p {
    font-size: 1.8rem; /* Decrease text size */
  }
}

@media only screen and (max-width: 768px) {
  /* Adjustments for tablets and smaller devices */
  #home4 .container {
    flex-direction: column; /* Stack elements vertically */
    text-align: center; /* Center align text */
  }

  #home4 .content,
  #home4 .image-container {
    width: 100%; /* Full width */
  }

  #home4 .image-container {
    margin-top: 20px; /* Add space between content and image */
  }

  #home4 img {
    max-width: 100%; /* Decrease image size */
  }
}

@media only screen and (max-width: 480px) {
  /* Adjustments for mobile devices */
  #home4 .content h2 {
    font-size: 3.5rem;
  margin-top: 20px;
  margin-left: -5px;
  font-weight: bold;
}/* Further decrease text size */

  #home4 .content p {
    font-size: 1.6rem; /* Further decrease text size */
  }

  #home4 img {
    max-width: 100%; /* Further decrease image size */
  }
}









#home2 {
  position: relative;
  background: linear-gradient(135deg, #5149f3, #f56536); 
  background-size: 200% 200%; /* Ensure the gradient covers the entire background */
  animation: gradientAnimation 10s ease infinite; /* Apply animation */
  backdrop-filter: blur(10px);
  color: #fff;
  padding: 20px;
  overflow: hidden; /* Ensure all contents are visible */
}

@keyframes gradientAnimation {
  0% {
    background-position: 0% 0%;
  }
  50% {
    background-position: 100% 100%;
  }
  100% {
    background-position: 0% 0%;
  }
}

#home2::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: radial-gradient(circle, rgba(255, 255, 255, 0.2) 20%, transparent 20%),
              radial-gradient(circle, rgba(255, 255, 255, 0.2) 20%, transparent 20%),
              radial-gradient(circle, rgba(255, 255, 255, 0.2) 20%, transparent 20%),
              radial-gradient(circle, rgba(255, 255, 255, 0.2) 20%, transparent 20%);
  background-size: 100px 100px, 150px 150px, 200px 200px, 250px 250px;
  background-position: 0% 0%, 100% 100%, 0% 0%, 100% 100%;
  animation: shapePattern 15s linear infinite; /* Shape pattern animation */
  z-index: -1; /* Behind other content */
}

@keyframes shapePattern {
  0% {
    background-position: 0% 0%, 100% 100%, 0% 0%, 100% 100%;
  }
  50% {
    background-position: 100% 100%, 0% 0%, 100% 100%, 0% 0%;
  }
  100% {
    background-position: 0% 0%, 100% 100%, 0% 0%, 100% 100%;
  }
}


#home2 .container {
  display: flex;
  justify-content: center;
  align-items: center;
}

#home2 .inner-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 80%;
  margin-right: 40px;
}

#home2 .title {
  font-size: 3.5rem;
  margin-top: 20px;
  margin-left: -5px;
  font-weight: bold;
}

#home2 .schedule {
  font-size: 1rem;
  margin-bottom: 20px;
}

#home2 .blocks-container {
  display: flex;
  flex-wrap: nowrap; /* Changed to wrap */
  justify-content: center;
  width: 100%;
  margin-right: 200px;
}

#home2 .block {
  width: calc(100% - 40px); /* Adjusted width to account for margin */
  height: 200px;
  background: linear-gradient(135deg, #FF8C00, #FF6347);; /* Gradient background */
  border-radius: 20px;
  border-style: solid;
  border-color: #000;
  margin: 20px;
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  animation: rotate-in 1s ease-out forwards; /* Custom animation */
}

@keyframes rotate-in {
  from {
    transform: rotate(-90deg);
    opacity: 0;
  }
  to {
    transform: rotate(0);
    opacity: 1;
  }
}

#home2 .block .icon {
  font-size: 4rem;
  margin-bottom: 10px;
  color: #fff; /* Icon color */
  box-shadow: 0 0 0 2px black, 0 0 0 6px #fff; /* Add black border with some space */
  outline: 2px solid transparent; /* Hide default outline */
}

#home2 .block .plus {
  position: absolute;
  top: 10px;
  right: 10px;
  width: 30px;
  height: 30px;
  border-radius: 50%; /* Circular border */
  background-color: #000; /* Black color */
  display: flex;
  justify-content: center;
  align-items: center;
  color: #fff; /* White color */
  font-size: 2rem; /* Plus sign size */
}


/* Increase the height of only the Scheduled Classes block */
#home2 .schedule .block {
  height: 391px;
  width: 225px;
}

@media (max-width: 768px) {
  #home2 .container {
    padding: 0 20px; /* Add padding to container */
    display: flex; /* Use flexbox */
    flex-direction: column; /* Stack flex items vertically */
    align-items: center; /* Center flex items horizontally */
    justify-content: center; /* Center flex items vertically */
    height: auto; /* Remove fixed height to allow content to extend */
  }

  #home2 .inner-container {
    display: flex; /* Use flexbox */
    flex-direction: column; /* Stack flex items vertically */
    align-items: baseline; /* Center items horizontally */
    justify-content: center; /* Center items vertically */
    width: 80%; /* Adjusted width */
    margin: 0 auto 20px auto; /* Set margins */
  }
  

  #home2 .blocks-container {
    display: flex; /* Use flexbox */
    flex-direction: column; /* Display blocks in a column */
    align-items: center; /* Center blocks horizontally */
  }
  @media (max-width: 768px) {
    #home2 .schedule {
      width: calc(100% - 40px); /* Adjusted width */
      margin: 10px auto; /* Center horizontally */
      margin-bottom: -19px; /* Reduce margin */
      
    }
    #home2 .schedule .block {
      width: calc(107% - 17px);
      height: 200px;
      margin-left: auto;
     
    }
    #home2 .title {
      text-align: center; /* Center the text */
      margin: 20px auto 0; /* Center vertically and add top margin */

    }

  }
  
  #home2 .block
   {
    width: calc(100% - 40px); /* Adjusted width */
    margin: 10px; /* Adjusted margin */
  }

 
}


@media (max-width: 1100px) {
  #home2 .container {
    padding: 0 20px; /* Add padding to container */
    display: flex; /* Use flexbox */
    flex-direction: column; /* Stack flex items vertically */
    align-items: center; /* Center flex items horizontally */
    justify-content: center; /* Center flex items vertically */
    height: auto; /* Remove fixed height to allow content to extend */
  }

  #home2 .inner-container {
    display: flex; /* Use flexbox */
    flex-direction: column; /* Stack flex items vertically */
    align-items: baseline; /* Center items horizontally */
    justify-content: center; /* Center items vertically */
    width: 80%; /* Adjusted width */
    margin: 0 auto 20px auto; /* Set margins */
  }
  

  #home2 .blocks-container {
    display: flex; /* Use flexbox */
    flex-direction: column; /* Display blocks in a column */
    align-items: center; /* Center blocks horizontally */
  }
  @media (max-width: 1100px) {
    #home2 .schedule {
      width: calc(100% - 40px); /* Adjusted width */
      margin: 10px auto; /* Center horizontally */
      margin-bottom: -19px; /* Reduce margin */
      
    }
    #home2 .schedule .block {
      width: calc(100% - -5px);
      height: 200px;
      margin-left: auto;
     
    }
    #home2 .title {
      text-align: center; /* Center the text */
      margin: 20px auto 0; /* Center vertically and add top margin */
      
    }

  }
  
  #home2 .block
   {
    width: calc(100% - 40px); /* Adjusted width */
    margin: 10px; /* Adjusted margin */
  }

 
}





/* Section 6 Styles */
#home6 {
  position: relative; /* Ensure the particles are positioned correctly */
  background-color: #000; /* Black background */
  padding: 50px 20px; /* Adjusted padding */
  height: 100vh; /* Ensure section fills viewport height */
  display: flex; /* Use flexbox */
  justify-content: center; /* Center content horizontally */
  align-items: center; /* Center content vertically */
  overflow: hidden; /* Hide overflowing content */
}

#particles-js {
  position: absolute; /* Position particles behind the content */
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 0; /* Ensure particles are behind content */
}

#home6 .container {
  display: flex;
  justify-content: space-around;
  align-items: center;
  max-width: 90%;
  margin: 0 auto;
  padding: 20px;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
  border-radius: 15px;
  overflow: hidden;
  position: relative; /* Ensure container is above particles */
  z-index: 1; /* Ensure container is above particles */
  background: rgba(0, 0, 0, 0.6); /* Slightly opaque background to ensure content visibility */
}

#home6 .image-container {
  flex: 1;
  text-align: center;
  position: relative;
  margin-right: 20px;
}

#home6 img {
  max-width: 100%;
  border-radius: 10px;
  transition: transform 0.3s ease;
}

#home6 img:hover {
  transform: scale(1.05);
}

#home6 .content {
  flex: 1;
  padding: 20px;
  border-radius: 10px;
  color: #fff; /* White text color for contrast */
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: stretch;
  animation: fadeIn 2s ease-in-out;
  position: relative;
  overflow: hidden;
}

#home6 .content h2 {
  margin-top: 0;
  text-align: center;
  font-size: 32px;
  font-weight: bold;
  margin-bottom: 20px;
  text-transform: uppercase;
  position: relative;
  overflow: hidden;
  background: linear-gradient(90deg, rgba(255,0,150,0.5), rgba(0,204,255,0.5));
  background-clip: text;
  -webkit-background-clip: text;
  color: transparent;
  animation: textGradient 3s linear infinite, rocketMovement 5s ease-in-out infinite, swing 3s ease-in-out infinite;
}

#home6 .content p {
  margin-bottom: 10px;
  text-align: left;
  font-size: 18px;
  line-height: 1.6;
  position: relative;
  opacity: 0;
  animation: slideIn 1s forwards, rocketMovement 5s ease-in-out infinite, swing 3s ease-in-out infinite;
}

#home6 .content p:nth-child(2) {
  animation-delay: 0.5s;
}

#home6 .content p:nth-child(3) {
  animation-delay: 1s;
}

#home6 .content p:nth-child(4) {
  animation-delay: 1.5s;
}

@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

@keyframes slideIn {
  from {
    transform: translateX(-100%);
    opacity: 0;
  }
  to {
    transform: translateX(0);
    opacity: 1;
  }
}

@keyframes textGradient {
  0% {
    background-position: 0% 50%;
  }
  100% {
    background-position: 100% 50%;
  }
}

@keyframes rocketMovement {
  0% {
    transform: translateY(0) rotate(0deg);
    opacity: 0.8;
  }
  50% {
    transform: translateY(-20px) rotate(10deg);
    opacity: 1;
  }
  100% {
    transform: translateY(0) rotate(0deg);
    opacity: 0.8;
  }
}

@keyframes swing {
  0% {
    transform: rotate(-5deg);
  }
  50% {
    transform: rotate(5deg);
  }
  100% {
    transform: rotate(-5deg);
  }
}

@media (max-width: 768px) {
  #home6 .container {
    flex-direction: column;
    align-items: stretch;
  }

  #home6 .image-container {
    margin-right: 0;
    margin-bottom: 20px;
  }
}





/* css for section 5 */
.home5 {
    background-color: #6a00ff;
    padding: 40px;
    height: 500px;
    display: flex; /* Use flexbox to center the table */
    justify-content: center; /* Center content horizontally */
    align-items: center; /* Center content vertically */
    flex-direction: column;
}

.home5 .title {
    color: white;
    padding: 10px;
    font-size: 40px;
    font-weight: bold;
    margin-bottom: 10px;
    text-align: center;
}

.home5 table {
    background-color: white;
    border-spacing: 0;
    max-width: 100%; /* Ensure table does not exceed container width */
    table-layout: fixed; /* Fix table layout */
    width: 85%; /* Expand table to fit container */
    margin: auto; /* Center the table horizontally */
}

  
  .home5 th,
  .home5 td {
    padding: 5px;
    border: 1px solid #6a00ff;
    font-weight: bold;
    font-size: 16px;
    color: black;
    height: 40px;
    max-width: 100px; /* Limit cell width */
    overflow: hidden; /* Hide overflow text */
    text-overflow: ellipsis; /* Show ellipsis for long text */
    white-space: nowrap; /* Prevent text wrapping */
  }
  
  .home5 th {
    background-color: black;
    color: white;
  }
  
  .home5 th:last-child,
  .home5 td:last-child {
    min-width: 100px; /* Adjust minimum width for the last column (Time) */
  }
  
  /* Additional Styles */
  .home5 .class-info,
  .home5 .time-info {
    padding-top: 10px;
    font-weight: bold;
    font-size: 12px;
  }
  
  .home5 .time-cell {
    background-color: #1DFF48;
    color: black;
  }
  
  .home5 .time-header {
    background-color: #1DFF48;
    color: black;
  }
  
/* Responsive CSS for home5 */
@media (max-width: 1300px) {
    .home5 th,
    .home5 td {
      padding: 4px;
      font-size: 9px;
    }

    .home5 .title {
     
      font-size: 30px;
    
  }
    
    .home5 .class-info{
      font-size: 10.8px;
    }
    .home5 .time-info {
      font-size: 9px;
    }
  }
  
  @media (max-width: 800px) {
    .home5 th,
    .home5 td {
      padding: 3px;
      font-size: 8px;
    }
    .home5 .title {
     
      font-size: 20px;
    
  }

  .home5 {

    padding: 8px;

}
   
    .home5 .class-info{
      font-size: 8px;
    }
    .home5 .time-info {
      font-size: 5.5px;
    }
  }
  
  @media (max-width: 600px) {
    .home5 th,
    .home5 td {
      padding: 2px;
      font-size: 7px;
    }

    .home5 {

      padding: 5px;

  }
    
    .home5 .class-info{
      font-size: 7.5px;
    }
    .home5 .time-info {
      font-size: 5px;
    }
  }
  
  @media (max-width: 500px) {
    .home5 th,
    .home5 td {
      padding: 1px;
      font-size: 6px;
    }
    .home5 {

      padding: 5px;

  }
   
    .home5 .class-info{
      font-size: 4.8px;
    }
    .home5 .time-info {
      font-size: 4px;
    }
  }
  
  @media (max-width: 400px) {
    .home5 th,
    .home5 td {
      padding: 1px;
      font-size: 5px;
    }

    .home5 {

      padding: 5px;

  }
    
    .home5 .class-info{
      font-size: 4.3px;
    }
    .home5 .time-info {
      font-size: 3.5px;
    }
  }
  
  @media (max-width: 300px) {
    .home5 th,
    .home5 td {
      padding: 1px;
      font-size: 4px;
    }

    .home5 {

      padding: 5px;

  }
    
    .home5 .class-info{
      font-size: 3.7px;
    }
    .home5 .time-info {
      font-size: 2.8px;
    }
  }


#home6 .container {
  height: auto;
  display: flex;
  justify-content: space-around;
  align-items: stretch;
  max-width: 90%;
  padding: 20px;
}

#home6 .image-container {
  flex: 1;
  text-align: center;
  position: relative;
  margin-right: 20px;
}

#home6 img {
  max-width: 100%;
  max-height: 100%;
  border-radius: 10px;
}

#home6 .content {
  flex: 1;
  padding: 20px;
  border-radius: 10px;
  color: white;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  align-items: stretch;
}

#home6 .content h2 {
  margin-top: 0;
  text-align: center;
  font-size: 32px;
  color: white;
  font-weight: bold;
  margin-bottom: 20px;
  text-transform: uppercase;
}

#home6 .content p {
  margin-bottom: 10px;
  text-align: left;
  font-size: 18px;
  font-weight: bold;
  line-height: 1.6;
}

@media (max-width: 768px) {
  #home6 .container {
    flex-direction: column;
    align-items: stretch;
  }

  #home6 .image-container {
    margin-right: 0;
    margin-bottom: 20px;
  }
}



/* Section 3 Styles */

/* Section 3 Styles */
#home3 .title {
  font-size: 3rem;
  margin-bottom: 20px;
  color: #fff; /* Adjusted text color */
}

#home3 {
  background-color: blue;
  padding: 50px 20px; /* Adjusted padding */
}

#home3 .container {
  padding: 20px;
  width: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
}

#home3 .content {
  display: flex;
  width: 100%;
  justify-content: space-between;
  align-items: center;
}

#home3 .image-container {
  flex: 1;
  max-width: 45%; /* Adjusted max-width */
  max-height: 70%;
  border-radius: 15px;
  overflow: hidden;
  margin-right: 20px;
  animation: floatAnimation 5s infinite alternate; /* Added animation */
}

#home3 .image-container img {
  display: block;
  width: 70%;
  height: auto;
  border-radius: 15px;
}

#home3 .classes-buttons {
  flex: 1;
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start;
  gap: 20px;
}

#home3 .classes-buttons button {
  background-color: #05006b;
  color: white;
  padding: 25px 50px; /* Adjusted padding */
  border: none;
  border-radius: 30px;
  cursor: pointer;
  font-size: 20px; /* Adjusted font size */
  box-sizing: border-box;
  transition: background-color 0.3s ease, transform 0.3s ease; /* Adjusted transition */
}

#home3 .classes-buttons button:hover {
  background-color: #001f5b;
  transform: scale(1.05); /* Slightly increased scale on hover */
  box-shadow: 0 0 20px rgba(255, 255, 255, 0.5); /* Added box-shadow on hover */
}

#home3 .classes-buttons button:active {
  background-color: #002080;
}

#home3 .social-icons {
  display: flex;
  align-items: center;
  margin-top: 20px;
}

#home3 .social-icons i {
  font-size: 24px;
  margin: 0 10px;
  color: white;
  transition: color 0.3s ease;
}

#home3 .social-icons i:hover {
  color: #ff4081;
}

@keyframes floatAnimation {
  0% {
    transform: translateY(-10px);
  }
  50% {
    transform: translateY(10px);
  }
  100% {
    transform: translateY(-10px);
  }
}

@media (max-width: 1024px) {
  #home3 .image-container {
    max-width: 50%; /* Adjusted width */
  }
}

@media (max-width: 768px) {
  #home3 .image-container img {
    display: block;
    width: 100%;
    height: auto;
    border-radius: 15px;
  }
}


@media (max-width: 768px) {
  #home3 .content {
    flex-direction: column; /* Stack items vertically on smaller screens */
    align-items: center;
  }

  #home3 .image-container {
    max-width: 100%;
    margin-bottom: 20px;
  }

  

  #home3 .classes-buttons {
    width: 100%;
    justify-content: center;
  }
}



@media (max-width: 480px) {
  #home3 .image-container {
    max-width: 100%;
  }

  #home3 .classes-buttons button {
    padding: 20px 40px;
  }
}


.home7 {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  color: #ffffff;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-color: #6a42f4;
}

#home7 .container {
  position: relative;
  max-width: 90%; /* Adjust as needed */
  max-height: 90%; /* Adjust as needed */
  overflow: hidden;
  border-radius: 10px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
}

#home7 .image-bg {
  display: block;
  width: 100%;
  height: auto;
  opacity: 0.8;
  animation: floatAnimation 5s infinite alternate; /* Added animation */
}

#home7 .text {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

#home7 .text h1 {
  margin: 0;
  margin-top: 250px;
  font-size: 40px;
}

#home7 .text p {
  margin-top: 10px;
  font-size: 15px;
}

@keyframes floatAnimation {
  0% {
    transform: translateY(-10px);
  }
  50% {
    transform: translateY(10px);
  }
  100% {
    transform: translateY(-10px);
  }
}

@media (max-width: 768px) {
  #home7 .text h1 {
    margin-top: 50px; /* Adjusted margin */
    font-size: 25px;
  }

  
}

@media (max-width: 768px) {
  #home7 .text {
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    font-size: 14px; /* Adjust font size as needed */
  }
}


#home7a {
            background-color: #6a5acd;
            font-family: Arial, sans-serif;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        #home7a .container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            width: 100%; /* Changed to 100% */
            padding:30px;
        }

        #home7a .agenda {
            text-align: left;
            font-size: 140%; /* Increased font size by 40% */
        }

        #home7a .reminders {
            background-color: #ff9999;
            border-radius: 50%;
            color: black;
            width: 280px; /* Increased width by 40% */
            height: 280px; /* Increased height by 40% */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 28px; /* Increased padding by 40% */
            box-sizing: border-box;
            position: relative;
        }

        #home7a .icon {
          background-color: #ffcc66;
          border-radius: 50%;
          width: 112px;
          height: 112px;
          display: flex;
          justify-content: center;
          align-items: center;
          position: absolute;
          bottom: -29px;
          right: -15px;
        }

        @media only screen and (max-width: 768px) {
            #home7a .container {
                flex-direction: column; /* Changed flex-direction to column for mobile */
                align-items: center; /* Center-align items for mobile */
            }

            #home7a .agenda {
                margin-bottom: 20px; /* Added margin-bottom for spacing */
            }
        }


#home8 {
  margin: 0;
  padding: 0;
  background-color: #6a00ff;
  font-family: Arial, sans-serif;
  color: white;
}

#home8 .container {
  padding: 50px;
  text-align: center;
}

#home8 .heading {
  text-align: center;
    color: white;
    font-size: 30px;
    padding: 20px;
}


#home8 .steps-container {
  display: flex;
  justify-content: space-around;
  align-items: flex-start;
  flex-wrap: wrap;
}

#home8 .step {
  width: 30%;
  margin: 20px;
  padding: 20px;
  background-color: #8b72ff;
  border-radius: 10px;
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
  display: flex;
  flex-direction: column;
  align-items: center;
  transition: transform 0.5s;
}

#home8 .step:hover {
  transform: translateY(-10px);
}

#home8 .step img {
  width: 200px;
  height: 200px;
  margin-bottom: 20px;
}

#home8 .step h3 {
  color: #333333;
  font-size: 18px;
  margin-bottom: 10px;
}

#home8 .step p {
  color: white;
  font-size: 14px;
}

@media (max-width: 768px) {
  #home8 .steps-container {
    flex-direction: column;
    align-items: center;
  }

  #home8 .step {
    width: 80%;
  }
}





/* Section 10 Styles */
#home10 {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
  background-color: #6a53ff; /* Solid purple background */
  color: white;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

#home10 .container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 80%; /* Adjusted width */
  padding: 20px; /* Adjusted padding */
  border-radius: 10px;
}

#home10 .left-section {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start; /* Align items to the left */
  min-width: 50%; /* Set minimum width to 50% */
}

#home10 .right-section {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

#home10 .title {
  font-size: 50px; /* Adjusted font size */
  font-weight: bold;
  text-align: left;
  margin-bottom: 5px; /* Adjusted margin */
}

#home10 .subtitle {
  text-align: left;
  font-size: 20px; /* Adjusted font size */
  margin-bottom: 15px; /* Adjusted margin */
}

#home10 .buttons {
  display: flex;
  flex-direction: column;
  align-items: center;
}

#home10 .button {
  padding: 20px 60px; /* Adjusted padding */
  margin-bottom: 20px; /* Adjusted margin */
  border: none;
  border-radius: 10px; /* Increase border radius */
  font-weight: bold;
  cursor: pointer;
  width: 300px; /* Adjusted width */
  text-align: center;
  color: black; /* Changed text color to black */
  font-size: 18px; /* Adjusted font size */
  box-sizing: border-box; /* Include padding and border in width and height */
  transition: opacity 0.3s ease; /* Added transition for hover effect */
}

#home10 .class6 { background-color: #20cd8d;}
#home10 .class7 { background-color: #C2FFE5 }
#home10 .class8 { background-color: pink; }
#home10 .class9 { background-color: yellow; }
#home10 .class10 { background-color: orange; }

/* Button hover effect */
#home10 .button:hover {
  opacity: 0.8;
}

/* Media Queries */
@media (max-width: 1024px) {
  #home10 .container {
    width: 90%; /* Adjusted width for tablets */
  }
}

@media (max-width: 768px) {
  #home10 .container {
    flex-direction: column; /* Adjusted direction for small screens */
    align-items: center; /* Center items */
    padding: 20px; /* Adjusted padding */
  }

  #home10 .left-section,
  #home10 .right-section {
    min-width: unset; /* Reset minimum width */
    text-align: center; /* Center text */
    align-items: center; /* Center items */
  }

  #home10 .title {
    font-size: 2.5rem; /* Adjusted font size */
  }

  #home10 .button {
    width: 100%; /* Adjusted width */
  }
}

@media (max-width: 480px) {
  #home10 .title {
    font-size: 2rem; /* Adjusted font size */
  }

  #home10 .subtitle {
    font-size: 1.25rem;
    text-align: center;
    margin-bottom: 25px;
}

  #home10 .button {
    padding: 15px 30px; /* Adjusted padding */
  }
}



#home12 {
  font-family: Arial, sans-serif;
  background-color: #4b0082;
  color: #fff;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  margin: 0;
}

#home12 .container {
  max-width: 800px;
  text-align: right; /* Align text to the right */
  display: flex; /* Display items in a row */
  justify-content: space-between; /* Spacing between items */
  align-items: center; /* Center vertically */
}

#home12 .image-container {
  position: relative;
  display: inline-block;
  margin-right: 60px;
  animation: zoomIn 1s ease-out; /* Apply the animation */
}

#home12 .image-container img {
  border-radius: 50%;
  height: 300px;
  width: 300px;
}

#home12 .emoji-bottom {
  margin-top: 20px;
}

#home12 h1 {
  font-size: 3rem;
  margin-bottom: 10px;
  text-align: left;
}

#home12 p {
  font-size: 1.8rem;
  line-height: 1.5;
  text-align: left;
}

@media (max-width: 768px) {
  #home12 body {
    padding: 20px;
    text-align: center;
  }

  #home12 .container {
    flex-direction: column; /* Change to column layout for smaller screens */
    text-align: center; /* Center-align text */
    padding: 32px;
  }

  #home12 .image-container {
    margin-bottom: 20px; /* Add space between image and text */
    margin-right: 0px;
  }

  #home12 .image-container img {
    border-radius: 50%;
    height: 200px;
    width: 200px;
  }

  #home12 h1 {
    text-align: center;
  }

  #home12 p {
    text-align: center;
  }
}

/* Keyframe animation */
@keyframes zoomIn {
  0% {
    transform: scale(0);
  }
  100% {
    transform: scale(1);
  }
}





#home14 {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
  background-color: #6a00ff; /* Solid purple background */
  color: white;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

#home14 .container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 80%;
  padding: 20px;
  border-radius: 10px;
}

#home14 .left-section {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start; /* Align items to the left */
  min-width: 50%; /* Set minimum width to 50% */
}

#home14 .right-section {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

#home14 .title {
  font-size: 50px; /* Adjusted font size */
  font-weight: bold;
  text-align: left;
  margin-bottom: 5px; /* Adjusted margin */
}

#home14 .subtitle {
  text-align: left;
  font-size: 20px; /* Adjusted font size */
  margin-bottom: 15px; /* Adjusted margin */
}

#home14 .buttons {
  display: flex;
  flex-direction: column;
  align-items: center;
}

#home14 .button {
  padding: 20px 60px; /* Adjusted padding */
  margin-bottom: 20px; /* Adjusted margin */
  border: none;
  border-radius: 10px; /* Increase border radius */
  font-weight: bold;
  cursor: pointer;
  width: 300px; /* Adjusted width */
  text-align: center;
  color: black; /* Changed text color to black */
  font-size: 18px; /* Adjusted font size */
  box-sizing: border-box; /* Include padding and border in width and height */
  transition: opacity 0.3s ease; /* Added transition for hover effect */
}

#home14 .class6 { background-color: #20cd8d;}
#home14 .class7 { background-color: #C2FFE5 }
#home14 .class8 { background-color: pink; }
#home14 .class9 { background-color: yellow; }
#home14 .class10 { background-color: orange; }
/* Button hover effect */
#home14 .button:hover {
  opacity: 0.8;
}

/* Media Queries */
@media (max-width: 1024px) {
  #home14 .container {
    width: 90%; /* Adjusted width for tablets */
  }
}

@media (max-width: 768px) {
  #home14 .container {
    flex-direction: column; /* Adjusted direction for small screens */
    align-items: center; /* Center items */
    padding: 20px; /* Adjusted padding */
  }

  #home14 .left-section,
  #home14 .right-section {
    min-width: unset; /* Reset minimum width */
    text-align: center; /* Center text */
    align-items: center; /* Center items */
  }

  #home14 .title {
    font-size: 2.5rem; /* Adjusted font size */
  }

  #home14 .button {
    width: 100%; /* Adjusted width */
  }
}

@media (max-width: 480px) {
  #home14 .title {
    font-size: 2rem; /* Adjusted font size */
  }

  #home14 .subtitle {
    font-size: 1.25rem; /* Adjusted font size */
    text-align: center;
    margin-bottom: 20px;
  }

  #home14 .button {
    padding: 15px 30px; /* Adjusted padding */
  }
}


#home15 {
  font-family: 'Comic Sans MS', cursive, sans-serif;
  background-color: #6a5acd;
  color: #fff;
  margin: 0;
  padding: 20px;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  gap: 30px;
}

#home15 .container {
  max-width: 800px;
  text-align: center;
  display: flex;
  align-items: center;
}

#home15 .content-wrapper {
  text-align: center;
  margin-bottom: 20px;
}

#home15 .content {
  max-width: 80%;
}

#home15 .content p{
  font-size: 16px;
  margin: 20px;
}

#home15 .content h1{
  font-size: 20px;
 
}

#home15 .teacher-info {
  max-width: 80%;
  display: flex;
  flex-direction: column;
  align-items: center;
  position: relative;
  margin-top: 20px;
}

#home15 .teacher-image {
  width: 250px;
  height: 250px;
  border-radius: 50%;
  overflow: hidden;
  border: 8px solid #fff;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
  margin-bottom: 20px;
  display: flex;
  justify-content: center;
  align-items: center;
}

#home15 .teacher-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

#home15 .about-teacher {
  position: absolute;
  top: 100%;
  left: 50%;
  transform: translate(-7%, -54%);
  background-color: #ff9999;
  padding: 20px;
  border-radius: 50%;
  box-shadow: 0 0 30px rgba(0, 0, 0, 0.7);
  text-align: center;
  z-index: 2;
  height: 200px;
  width: 200px;
}

#home15 .about-teacher h2, .about-teacher p {
  margin: 0;
}

button {
  background-color: #ffc107;
  color: #333;
  padding: 15px 30px;
  border: none;
  border-radius: 10px;
  cursor: pointer;
  font-weight: bold;
  transition: background-color 0.3s;
  font-size: 18px;
  margin-top: 20px;
}

button:hover {
  background-color: #ff9800;
}

/* Media query for mobile devices */
@media only screen and (max-width: 768px) {
  #home15 .content {
    max-width: 100%;
  }

  #home15 {
    font-family: 'Comic Sans MS', cursive, sans-serif;
    background-color: #6a5acd;
    color: #fff;
    margin: 0;
    padding: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    gap: 30px;
    padding-bottom: 100px;
}
  #home15 .container {
    max-width: 800px;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
}

#home15 .about-teacher {
    position: absolute;
    top: 100%;
    left: 50%;
    transform: translate(-7%, -54%);
    background-color: #ff9999;
    padding: 20px;
    border-radius: 50%;
    box-shadow: 0 0 30px rgba(0, 0, 0, 0.7);
    text-align: center;
    z-index: 2;
    height: 150px;
    width: 150px;
}

  #home15 .teacher-info {
    max-width: 100%;
  }

  #home15 .teacher-image {
    width: 150px;
    height: 150px;
  }
}




#home17 {
  font-family: 'Poppins', sans-serif;
  background-color: #8b72ff;
  color: #ffffff;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  margin: 0;
}

#home17 .container {
  max-width: 90%;
  padding: 20px;
  text-align: center;
}

#home17 h1 {
  margin-bottom: 40px;
  font-size: 30px;
  padding: 20px;
}

#home17 .process-steps {
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
  margin-bottom: 40px;
}


#home17 .step {
  flex: 0 0 calc(33.33% - 40px); /* Three items per row with spacing */
  max-width: 300px;
  padding: 20px;
  margin: 0 20px;
  background-color: #ffffff;
  color: #333333;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease; /* Added transition for smooth hover effect */
}

#home17 .step:hover {
  transform: translateY(-10px); /* Move card up on hover */
}

#home17 .step-icon {
  font-size: 48px;
  color: #8b72ff;
  margin-bottom: 10px;
}

#home17 .step h3 {
  margin-bottom: 30px; /* Added space after h3 tag */
  font-size: medium;
  

}

#home17 .step p {
  font-size: 16px; /* Adjust font size as needed */
  text-align: left;
}

@media (max-width: 768px) {
  #home17 .process-steps {
    flex-direction: column;
    align-items: center;
  }

  #home17 .step {
    flex: 0 0 calc(100% - 40px); /* Full width with spacing */
    margin: 20px 0;
  }
}




        #home18 {
            font-family: 'Poppins', sans-serif;
            background-color: #8b72ff;
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        #home18 .container {
            max-width: 1000px;
            padding: 20px;
            text-align: center;
        }

        #home18 .pricing-cards {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        #home18 .pricing-card {
            background-color: #C2FFE5;
            color: #333333;
            border-radius: 20px; /* Increased border radius */
            border: 2px solid #000000; /* Added black border */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px; /* Increased padding */
            flex: 1;
            max-width: calc(33.33% - 40px); /* Adjust based on the number of cards per row */
            margin-bottom: 20px;
            position: relative; /* Added position relative */
            display: flex;
            flex-direction: column; /* Added flex-direction column */
        }

        #home18 .card-header {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        #home18 .card-price {
            font-size: 24px;
            font-weight: 600;
            color: #A2A40D;
            margin-bottom: 15px;
            position: relative;
        }

        #home18 .card-price::after {
            content: '';
            position: absolute;
            bottom: -5px; /* Adjust the distance of the line from the text */
            left: 0;
            width: 100%;
            height: 2px;
            background-color: black;
        }

        #home18 .card-details {
            text-align: left;
            margin-bottom: auto; /* Pushes content to the top */
        }

        #home18 .card-details ul {
            padding-left: 20px;
        }

        #home18 .book-demo {
            background-color: #000000; /* Changed button color to black */
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 10px; /* Added margin-top to separate from content */
            align-self: center; /* Center the button horizontally */
        }

        #home18 .book-demo:hover {
            background-color: #333333; /* Darken button color on hover */
        }

        @media (max-width: 768px) {
            #home18 .pricing-cards {
                flex-direction: column; /* Display cards below each other */
            }
            
            #home18 .pricing-card {
                max-width: 100%; /* Take up full width */
            }
        }

        @media (max-width: 480px) {
            #home18 .pricing-card {
                max-width: 100%; /* Take up full width */
            }
        }


        #home19 {
            font-family: 'Poppins', sans-serif;
            background-color: #8b72ff;
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        #home19 .container {
            max-width: 800px;
            padding: 20px;
            display: flex;
            flex-direction: row-reverse; /* Align content to the right */
            justify-content: space-between;
            align-items: center;
        }

        #home19 .contact-content {
            width: 60%; /* Adjust the width of the text content */
            display: flex;
            flex-direction: column;
            justify-content: center; /* Center content vertically */
            align-items: center; /* Center content horizontally */
        }

        #home19 .contact-info {
            margin-bottom: 20px;
        }

        #home19 .contact-info p {
            margin: 10px 0;
        }

        #home19 .contact-info i {
            margin-right: 10px;
        }

        #home19 .register-btn {
            background-color: #333333;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-bottom: 20px;
            align-self: center; /* Center button horizontally */
        }

        #home19 .register-btn:hover {
            background-color: #555555;
        }

        #home19 .social-icons {
            margin-top: 20px;
            align-self: center; /* Center social icons horizontally */
        }

        #home19 .social-icons.icons {
            display: flex;
            justify-content: center; /* Center icons horizontally */
        }

        #home19 .social-icons .icons a {
            color: #ffffff;
            font-size: 24px;
            margin: 0 10px;
            transition: color 0.3s ease;
        }

        #home19 .social-icons #home19 .icons a:hover {
            color: #ffcc00;
        }

        #home19 .support-agent {
            align-self: center; /* Center image vertically */
        }

        #home19 .support-agent img {
            max-width: 200px;
            height: auto;
            margin-bottom: 20px;
        }

        /* Media query for mobile view */
        @media (max-width: 768px) {
            #home19 .container {
                flex-direction: column; /* Stack content vertically */
                align-items: center; /* Center content horizontally */
                text-align: center; /* Center text content */
            }

            #home19 .contact-content {
                width: 100%; /* Full width for text content */
            }

            #home19 .support-agent {
                order: -1; /* Move image above text content */
            }
        }


        .home20 {
    background-color: #5943F4;
    padding: 10px;
    margin-bottom: 20px;
    overflow-x: auto; /* Allow horizontal scrolling if needed */
  }
  
  .home20 .title {
    background-color: #5943F4;
    padding: 10px;
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 10px;
    text-align: center;
  }
  
  .home20 table {
    background-color: white;
    border-spacing: 0;
    max-width: 100%; /* Ensure table does not exceed container width */
    table-layout: fixed; /* Fix table layout */
    width: 100%; /* Expand table to fit container */
  }
  
  .home20 th,
  .home20 td {
    padding: 5px;
    border: 1px solid #6a00ff;
    font-weight: bold;
    font-size: 10px;
    color: black;
    height: 40px;
    max-width: 100px; /* Limit cell width */
    overflow: hidden; /* Hide overflow text */
    text-overflow: ellipsis; /* Show ellipsis for long text */
    white-space: nowrap; /* Prevent text wrapping */
  }
  
  .home20 th {
    background-color: black;
    color: white;
  }
  
  .home20 th:last-child,
  .home20 td:last-child {
    min-width: 100px; /* Adjust minimum width for the last column (Time) */
  }
  
  /* Additional Styles */
  .home20 .class-info,
  .home20 .time-info {
    padding-top: 10px;
    font-weight: bold;
    font-size: 12px;
  }
  
  .home20 .time-cell {
    background-color: #1DFF48;
    color: black;
  }
  
  .home20 .time-header {
    background-color: #1DFF48;
    color: black;
  }
  
  /* Responsive CSS */
  @media (max-width: 1300px) {
    .home20 th,
    .home20 td {
      padding: 4px;
      font-size: 9px;
    }
    .home20 .title,
    .home20 .class-info{
      font-size: 10.8px;
    }
    .home20 .time-info {
        font-size: 9px;
      }
  }
  
  @media (max-width: 800px) {
    .home20 th,
    .home20 td {
      padding: 3px;
      font-size: 8px;
    }
    .home20 .title,
    .home20 .class-info{
      font-size: 8px;
    }
    .home20 .time-info {
        font-size: 5.5px;
      }
  }
  
  @media (max-width: 600px) {
    .home20 th,
    .home20 td {
      padding: 2px;
      font-size: 7px;
    }
    .home20 .title,
    .home20 .class-info{
      font-size: 7.5px;
    }
    .home20 .time-info {
        font-size: 5px;
      }

  }
  
  
  @media (max-width: 500px) {
    .home20 th,
    .home20 td {
      padding: 1px;
      font-size: 6px;
    }
    

    .home20 .title,
    .home20 .class-info{
      font-size: 7px;
    }
    .home20 .time-info {
        font-size: 4.6px;
      }

  }
  
  @media (max-width: 400px) {
    .home20 th,
    .home20 td {
      padding: 1px;
      font-size: 5px;
    }
    .home20 .title,
    .home20 .class-info{
      font-size: 6px;
    }
    .home20 .time-info {
        font-size: 4px;
      }
  }
  
  @media (max-width: 300px) {
    .home20 th,
    .home20 td {
      padding: 1px;
      font-size: 4px;
    }
    .home20 .title,
    .home20 .class-info{
      font-size: 5px;
    }
    .home20 .time-info {
        font-size: 2.8px;
      }
  }
  
  




</style>
</head>
<body>

  <section class="home" id="home"> 
    <div class="logo">
      <h1>Global Academics</h1>
      <h2>EST. 2015</h2>
    </div>
    
    <div class="slogan-menu">
      <div class="slogan">
        <p>Let's make </p>
        <p><span id="typing-text">Learning fun!</span></p>
        <img src="homeimg.png" alt="Image" class="image">
      </div>

      <div class="menu">
        <ul>
          <li>Introduction</li>
          <li>Classes Offered</li>
          <li>Classroom Features</li>
          <li>Faculty and Staff</li>
          <li>Application Process</li>
          <li>Contact Information</li>
        </ul>
      </div>
    </div>
</section>





  <section class="home4" id="home4"> 
    <div class="container">
      <div class="content">
        <h2>About Us</h2>
        <p>Global Academics is a premier but affordable offline tuition center dedicated to fostering academic excellence in students from class 6th to 10th standards. Our unique approach, spearheaded by esteemed IIT alumni, is designed to unlock the full potential of every student. At Global Academics, we believe in nurturing minds with a blend of foundational knowledge and innovative thinking, preparing students not just for exams, but for a lifetime of learning.</p>
      </div>
      <div class="image-container">
        <img src="about.png" alt="Illustration">
      </div>
    </div>
  </section>
  
  
  <section class="home2" id="home2">  
    <div class="container">
      <div class="inner-container">
        <div class="title">How we operate</div>
        <div class="schedule">
          <div class="block">
            <span class="plus">+</span>
            <i class="icon far fa-calendar-alt"></i>
            <span>Scheduled Classes</span>
          </div>
        </div>
      </div>
    
      <div class="inner-container">
        <div class="blocks-container">
          <div class="block">
            <span class="plus">+</span>
            <i class="icon far fa-file-alt"></i>
            <span>Course Coverage</span>
          </div>
    
          <div class="block">
            <span class="plus">+</span>
            <i class="icon fas fa-chart-bar"></i>
            <span>Progress tracking</span>
          </div>
    
          <div class="block">
            <span class="plus">+</span>
            <i class="icon fas fa-user"></i>
            <span>Personal Guidance</span>
          </div>
        </div>
    
        <div class="blocks-container">
          <div class="block">
            <span class="plus">+</span>
            <i class="icon fas fa-th-large"></i>
            <span>Online Access</span>
          </div>
    
          <div class="block">
            <span class="plus">+</span>
            <i class="icon far fa-lightbulb"></i>
            <span>IITian’s Approach</span>
          </div>
    
          <div class="block">
            <span class="plus">+</span>
            <i class="icon far fa-heart"></i>
            <span>Weekly Feedback</span>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="home6">
    <!-- Particles container -->
    <div id="particles-js"></div>
    
    <!-- Main content -->
    <div class="container">
      <div class="image-container">
        <img src="why.png" alt="Illustration">
      </div>
      <div class="content">
        <h2>Why Us ?</h2>
        <p><strong>1.</strong> Only IITians as Tutors with Prior Teaching Exp.</p>
        <p><strong>2.</strong> Premium Classes at an Affordable Fee</p>
        <p><strong>3.</strong> Offline classes in your vicinity.</p>
      </div>
    </div>
  </section>

  
  
  <section class="home3" id="home3"> <!-- Added section for classes offered -->
    <div class="container">
      <div class="title">Classes Offered</div>
      <div class="content">
        <div class="image-container">
          <img src="classes.png" alt="Person holding books">
        </div>
        <div class="classes-buttons">
          <button>Class 6</button>
          <button>Class 7</button>
          <button>Class 8</button>
          <button>Class 9</button>
          <button>Class 10</button>
          <button>Foundation</button>
          <div class="social-icons">
            <i class="fab fa-youtube"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-facebook"></i>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="home7" id="home7">
    <div class="container">
      <img src="5.png" class="image-bg" alt="Background Image">
      <div class="text">
        <h1>Classroom Features</h1>
        <p>Welcome to our class online noticeboard.</p>
      </div>
    </div>
  </section>

  <section class="home7a" id="home7a">
    <div class="container">
        <div class="agenda">
            <h1>1. Today's Agenda</h1>
            <p>We will showcase the lessons or activities that the class has for the day.</p>
            <p>This can be broken down by:</p>
            <ul>
                <li>Blocks of time</li>
                <li>Activity</li>
                <li>Subject</li>
            </ul>
        </div>
        <div class="reminders">
            <h2>Reminders</h2>
            <p>Aim is to Help the students remember things that they need to accomplish within the day.</p>
            <div class="icon">😄</div>
        </div>
    </div>
</section>






  <section class="home8" id="home8">
  <div class="container">
    <h1 class="heading">Our Teaching Techniques</h1>
    <div class="steps-container">
      <div class="step">
        <img src="teaching.png" alt="Interactive Teaching Icon">
        <h3>Step 1</h3>
        <p class="step-description">Interactive Teaching: We will engage students by delivering comprehensive subject instruction during interactive classes.</p>
      </div>

      <div class="step">
        <img src="problemsolving.png" alt="Problem-Solving Practices Icon">
        <h3>Step 2</h3>
        <p class="step-description">Problem-Solving Practice: We will reinforce learning through hands-on problem-solving sessions, guiding students to apply knowledge.</p>
      </div>

      <div class="step">
        <img src="exam.png" alt="Exam-Ready Assessments Icon">
        <h3>Step 3</h3>
        <p class="step-description">Exam-Ready Assessments: We will evaluate progress through regular exams, refining strategies to enhance overall exam preparedness.</p>
      </div>
    </div>
  </div>
</section>

  
  
  


    <section class="home10" id="home10">
    <div class="container">
      <div class="left-section">
        <div class="title">4. Classroom Policies</div>
        <div class="subtitle">Please ensure your child adheres to our classroom rules:</div>
      </div>
      <div class="right-section">
        <div class="buttons">
          <button class="button class6">Regular Attendance</button>
          <button class="button class7">Participate Regularly</button>
          <button class="button class8">Homework Supervision</button>
          <button class="button class9">Safe Technology Usage</button>
          <button class="button class10">Feedback Sharing</button>
        </div>
      </div>
    </div>
  </section>




  <section class="home12" id="home12">
    <div class="container">
      <div class="image-container">
        <img src="teacher.jpg" alt="Student Photo">
      </div>
      <div>
        <h1>6. Student of the Week</h1>
        <p>In the classroom, acknowledging these high-achievers is an opportunity to highlight the positive aspects of healthy competition. It encourages students to set personal goals, work diligently, and strive for excellence.</p>
      </div>
    </div>
  </section>
  


  <section class="home5" id="home5"> 
    <div class="title">Class Calendar</div>
    <table>
      <thead>
        <tr>
          <th></th>
          <th>Class 6</th>
          <th>Class 7</th>
          <th>Class 8</th>
          <th>Class 9</th>
          <th>Class 10</th>
          <th class="time-cell">Time</th> 
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Friday</td>
          <td>         
              <p class="class-info">Maths</p> 
              <p class="class-info">Science</p>
          </td>
          <td>
            <p class="class-info">Science </p>
            <p class="class-info">Maths</p>
          </td>
          <td></td>
          <td></td>
          <td></td>
          
          <td class="time-cell">
            <p class="time-info">3:00 PM - 4:00 PM</p>
            <p class="time-info">4:00 PM - 5:00 PM</p>
          </td>

        </tr>
        <tr>
          <td>Saturday</td>
          <td></td>
          <td></td>
          <td>
            <p class="class-info">Maths</p>
            <p class="class-info">Science</p> 
          </td>
          <td>
            <p class="class-info">Science</p> 
            <p class="class-info">Maths</p>
          </td>
          <td></td>
          <td class="time-cell">
          <p class="time-info">5:00 PM - 6:00 PM</p>
          <p class="time-info">6:00 PM - 7:00 PM</p>
        </td>
        </tr>
        <tr>
          <td>Sunday</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>

          <td>
            <p class="class-info"> Maths</p> 
            <p class="class-info">Science</p>
            <p class="class-info">Foundation</p>

          </td>

          <td class="time-cell">
            <p class="time-info">7:00 PM - 8:00 PM</p>
            <p class="time-info">7:00 PM - 8:00 PM</p>
            <p class="time-info">8:00 PM - 9:00 PM</p>
          </td>

        </tr>
      </tbody>
    </table>
  </section>





  <section class="home14" id="home14">
    <div class="container">
      <div class="left-section">
        <div class="title">8. Class Resources</div>
        <div class="subtitle">Students can access classroom study resources here.</div>
      </div>
      <div class="right-section">
        <div class="buttons">
          <button class="button class6">Class 6</button>
          <button class="button class7">Class 7</button>
          <button class="button class8">Class 8</button>
          <button class="button class9">Class 9</button>
          <button class="button class10">Class 10</button>
        </div>
      </div>
    </div>
  </section>


  <section id="home15" class="home15">
    <div class="container">
      <div class="content-wrapper">
        <div class="content">
          <h1>Meet Our Faculty</h1>
          <p>Our faculty, comprising mostly IITians, are not just teachers but mentors who guide students through their academic journey. They bring a wealth of experience and a passion for teaching, ensuring that each lesson is engaging, informative, and inspiring. Meet the dedicated individuals who are at the heart of our educational journey.</p>
          <button>Visit PROFILE</button>
        </div>
      </div>
      <div class="teacher-info">
        <div class="teacher-image">
          <img src="teacher.jpg" alt="Teacher's Image">
        </div>
        <div class="about-teacher">
          <h2>About Teacher</h2>
          <p>Dr. Smith is a renowned</p>
        </div>
      </div>
    </div>
  </section>
  


  <section class="home17" id="home17">
    <div class="container">
      <h1>Application Process</h1>
      <div class="process-steps">
        <div class="step">
          <div class="step-icon">
            <i class="fas fa-clipboard-list"></i>
          </div class="details">
          <h3>Online or Offline Registration</h3>
          <p>Parents can register their child by filling out a quick online form on our website.</p>
        </div>
        <div class="step">
          <div class="step-icon">
            <i class="fas fa-phone"></i>
          </div class="details">
          <h3>Verification Call</h3>
          <p>Our team will follow up with a brief verification call to ensure all details are accurate.</p>
        </div>
        <div class="step">
          <div class="step-icon">
            <i class="fas fa-check"></i>
          </div class="details" >
          <h3>Welcome Confirmation</h3>
          <p>Upon verification, parents receive a welcome confirmation, completing the enrollment process.</p>
        </div>
      </div>
    </div>
  </section>
  



  <section class="home18" id="home18">
    <div class="container">
      <h1>Fee Structure [ GST Included ]</h1>
      <div class="pricing-cards">
        <div class="pricing-card">
          <div class="card-header">CBSC Class 6th, 7th, & 8th</div>
          <div class="card-price">INR 3499/mo</div>
          <div class="card-details">
            <p>Expert CBSE Tutors for Class 6th, 7th and 8th:</p>
            <ul>
              <li>MATHS</li>
              <li>SCIENCE</li>
            </ul>
          </div>
          <button class="book-demo">BOOK FREE DEMO CLASS</button>
        </div>
        <div class="pricing-card">
          <div class="card-header">CBSC 9th & 10th</div>
          <div class="card-price">INR 3999/mo</div>
          <div class="card-details">
            <p>IITian tutors for Class 9th and 10th:</p>
            <ul>
              <li>MATHS</li>
              <li>SCIENCE</li>
            </ul>
          </div>
          <button class="book-demo">BOOK FREE DEMO CLASS</button>
        </div>
        <div class="pricing-card">
          <div class="card-header">IIT JEE & NEET FOUNDATION</div>
          <div class="card-price">INR 4999/mo</div>
          <div class="card-details">
            <p>IITian tutors for Class 9th and 10th:</p>
            <ul>
              <li>MATHS</li>
              <li>SCIENCE</li>
              <li>EXAM SPECIFIC EXTRA CLASSES</li>
            </ul>
          </div>
          <button class="book-demo">BOOK FREE DEMO CLASS</button>
        </div>
      </div>
    </div>
  </section>


  <section class="home19" id="home19">
    <div class="container">
      <div class="contact-content">
        <h1>Contact us</h1>
        <div class="contact-info">
          <p><i class="fas fa-map-marker-alt"></i> FF156, Gaur City Center, Greater Noida West, Noida, Delhi NCR- 201009</p>
          <p><i class="fas fa-globe"></i> www.globalacademics.in</p>
          <p><i class="fas fa-envelope"></i> helpme@globalacademics.in</p>
          <p><i class="fas fa-phone"></i> +91-7987483389</p>
        </div>
        <button class="register-btn">REGISTER TODAY</button>
        <div class="social-icons">
          <p>GET SOCIAL</p>
          <div class="icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
      <div class="support-agent">
        <img src="support-agent.jpg" alt="Support Agent">
      </div>
    </div>
  </section>


  <section class="home20" id="home20"> 
    <div class="title">Class Calendar</div>
    <table>
      <thead>
        <tr>
          <th></th>
          <th>Monday</th>
          <th>Tuesday</th>
          <th>Wednesday</th>
          <th>Thursday</th>
          <th>Friday</th>
          <th>Saturday</th>
          <th>Sunday</th>
          <th class="time-header" >Time</th> 
        </tr>
      </thead>
      <tbody>
        <tr>
          <td></td>
          <td>         
              <p class="class-info">Maths</p> 
              <p class="class-info">Science</p>
          </td>
          <td>
            <p class="class-info">Science </p>
            <p class="class-info">Maths</p>
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="time-cell">
            <p class="time-info">3:00 PM - 4:00 PM</p>
            <p class="time-info">4:00 PM - 5:00 PM</p>
          </td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td>
            <p class="class-info">Maths</p>
            <p class="class-info">Science</p> 
          </td>
          <td>
            <p class="class-info">Science</p> 
            <p class="class-info">Maths</p>
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="time-cell">
            <p class="time-info">5:00 PM - 6:00 PM</p>
            <p class="time-info">6:00 PM - 7:00 PM</p>
          </td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>
            <p class="class-info"> Maths</p> 
            <p class="class-info">Science</p>
            <p class="class-info">Foundation</p>
          </td>
          <td></td>
          <td></td>
          <td class="time-cell">
            <p class="time-info">7:00 PM - 8:00 PM</p>
            <p class="time-info">7:00 PM - 8:00 PM</p>
            <p class="time-info">8:00 PM - 9:00 PM</p>
          </td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>
            <p class="class-info">Maths</p>
            <p class="class-info">Science</p> 
          </td>
          <td>
            <p class="class-info">Science</p> 
            <p class="class-info">Maths</p>
          </td>
          <td></td>
          <td></td>
          <td class="time-cell">
            <p class="time-info">4:00 PM - 5:00 PM</p>
            <p class="time-info">5:00 PM - 6:00 PM</p>
          </td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td>
            <p class="class-info">Maths</p>
            <p class="class-info">Science</p> 
          </td>
          <td>
            <p class="class-info">Science</p> 
            <p class="class-info">Maths</p>
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="time-cell">
            <p class="time-info">3:00 PM - 4:00 PM</p>
            <p class="time-info">4:00 PM - 5:00 PM</p>
          </td>
        </tr>
      </tbody>
    </table>
</section>

  

  
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  

  document.addEventListener("DOMContentLoaded", function() {
  const home4 = document.querySelector("#home4");
  const morphElements = document.querySelectorAll(".morph-animation");

  function isElementPartiallyInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
      rect.top <= window.innerHeight && // Top of the element is in view
      rect.bottom >= 0 && // Bottom of the element is in view
      rect.left <= window.innerWidth && // Left side of the element is in view
      rect.right >= 0 // Right side of the element is in view
    );
  }

  function checkVisibility() {
    if (isElementPartiallyInViewport(home4)) {
      home4.classList.add("in-view");

      // Add morph animation class to text elements
      morphElements.forEach(element => {
        element.classList.add("morph-animate");
      });

      // Remove the event listener once the element is in view
      window.removeEventListener("scroll", checkVisibility);
      window.removeEventListener("resize", checkVisibility);
    }
  }

  window.addEventListener("scroll", checkVisibility);
  window.addEventListener("resize", checkVisibility);

  // Check visibility on page load
  checkVisibility();
});

// Initialize particles.js
particlesJS('particles-js', {
  "particles": {
    "number": {
      "value": 100,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": {
      "value": "#ffffff"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#000000"
      }
    },
    "opacity": {
      "value": 0.5,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 3,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 150,
      "color": "#ffffff",
      "opacity": 0.4,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 6,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": false,
        "mode": "repulse"
      },
      "onclick": {
        "enable": false,
        "mode": "push"
      },
      "resize": true
    }
  },
  "retina_detect": true
});



</script>







</html>
  