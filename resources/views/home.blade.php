<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello Home</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite(['resources/css/app.css','resources/js/app.js','resources/js/navbar.js'])
</head>    
<body class="font-in font-feature-settings-cv11">

  <x-navbar></x-navbar>

  <x-hero></x-hero>

  <x-features></x-features>

  <x-faqs></x-faqs>

  <section class="max-w-6xl mx-auto bg-gradient-to-t from-graone to-gratwo p-10 rounded-3xl mb-10 sm:w-full sm:p-4 sm:rounded-none sm:mb-0">
    <div class="max-w-6xl p-10 mx-auto py-10 grid grid-cols-5 gap-x-10 sm:max-w-sm sm:grid-cols-1 sm:gap-y-8 sm:p-4">

      <!-- company -->

      <div class=" flex flex-col col-span-2 gap-y-7 sm:col-span-1">
        <svg width="210" height="42" viewBox="0 0 210 42" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M15.5709 2.58269L1.073 17.077C1.02574 17.1244 0.964254 17.1549 0.897964 17.164C0.831673 17.173 0.764239 17.1601 0.706003 17.1272C0.647768 17.0942 0.601945 17.0431 0.57556 16.9816C0.549175 16.9202 0.543687 16.8517 0.559934 16.7869C1.29278 13.8068 2.70136 11.0351 4.67675 8.68611C5.05335 8.2388 5.45218 7.80401 5.87326 7.38175C6.19457 7.06138 6.52366 6.75353 6.86052 6.45821C9.27481 4.34103 12.1633 2.83583 15.282 2.06976C15.3468 2.05394 15.415 2.05974 15.4762 2.08628C15.5374 2.11281 15.5883 2.15862 15.621 2.21673C15.6537 2.27484 15.6665 2.34205 15.6575 2.40812C15.6485 2.47419 15.6181 2.5355 15.5709 2.58269Z" fill="#92E48B"/>
          <path d="M7.47297 36.9766C6.73242 36.4679 6.02648 35.9105 5.35982 35.3083C5.29202 35.2461 5.22724 35.1813 5.16548 35.114C2.0632 31.6874 0.239636 27.2949 0.0030945 22.6792C-0.0150261 22.3002 0.0465866 21.9217 0.18395 21.5681C0.321314 21.2144 0.531371 20.8935 0.800546 20.6261L6.78046 14.6477C7.03402 14.3942 7.33503 14.1931 7.66632 14.0559C7.9976 13.9188 8.35268 13.8481 8.71126 13.8481C9.06984 13.8481 9.42491 13.9188 9.7562 14.0559C10.0875 14.1931 10.3885 14.3942 10.6421 14.6477L15.6114 19.6197C16.0663 20.0732 16.3464 20.6728 16.4022 21.3127C16.458 21.9525 16.286 22.5916 15.9165 23.117C13.4716 26.5908 12.0233 30.6668 11.7284 34.9041C11.5801 37.0019 9.21169 38.1722 7.47297 36.9766Z" fill="#63D69B"/>
          <path d="M17.768 17.3624L12.8446 12.4403C12.5911 12.1869 12.39 11.886 12.2528 11.5548C12.1155 11.2237 12.0449 10.8688 12.0449 10.5103C12.0449 10.1519 12.1155 9.79695 12.2528 9.4658C12.39 9.13465 12.5911 8.83377 12.8446 8.58034L19.1284 2.29817C19.4214 2.00481 19.7776 1.78227 20.1697 1.64758C20.5619 1.51288 20.9797 1.46959 21.3912 1.521L21.456 1.52877C26.4253 2.16349 31.042 4.43335 34.5786 7.98062C34.7898 8.19175 34.9958 8.40591 35.1966 8.62309C35.2794 8.71283 35.3558 8.80827 35.4253 8.9087L35.4557 8.95209C36.66 10.6968 35.5205 13.0867 33.4048 13.235C29.0351 13.5372 24.8393 15.0655 21.2992 17.6441C20.7734 18.0252 20.1289 18.2061 19.4816 18.1545C18.8343 18.1028 18.2267 17.822 17.768 17.3624Z" fill="#35C6A8"/>
          <path d="M33.099 34.6001C32.6779 35.0215 32.243 35.4202 31.7943 35.7963C27.8129 39.1374 22.6917 40.8066 17.5056 40.4535C16.8436 40.4097 16.22 40.127 15.7509 39.658C15.2817 39.189 14.999 38.5656 14.9552 37.9037C14.602 32.7189 16.2716 27.599 19.6136 23.6186C19.9893 23.1709 20.3881 22.7361 20.8101 22.3142C21.1314 21.993 21.4605 21.6852 21.7973 21.3907C23.7869 19.6488 26.1009 18.3166 28.6066 17.4706C31.1123 16.6246 33.7603 16.2815 36.3989 16.4608C37.0623 16.5041 37.6874 16.7871 38.1575 17.257C38.6276 17.727 38.9106 18.3519 38.9539 19.0151C39.1331 21.6531 38.7898 24.3004 37.9436 26.8054C37.0975 29.3105 35.765 31.6239 34.0228 33.6131C33.7287 33.9498 33.4207 34.2789 33.099 34.6001Z" fill="#00B4AF"/>
          <path d="M53.784 23.16C53.784 21.5547 54.0827 20.1453 54.68 18.932C55.296 17.7187 56.1267 16.7853 57.172 16.132C58.2173 15.4787 59.384 15.152 60.672 15.152C61.7733 15.152 62.7347 15.376 63.556 15.824C64.396 16.272 65.04 16.86 65.488 17.588V15.376H70.276V31H65.488V28.788C65.0213 29.516 64.368 30.104 63.528 30.552C62.7067 31 61.7453 31.224 60.644 31.224C59.3747 31.224 58.2173 30.8973 57.172 30.244C56.1267 29.572 55.296 28.6293 54.68 27.416C54.0827 26.184 53.784 24.7653 53.784 23.16ZM65.488 23.188C65.488 21.9933 65.152 21.0507 64.48 20.36C63.8267 19.6693 63.024 19.324 62.072 19.324C61.12 19.324 60.308 19.6693 59.636 20.36C58.9827 21.032 58.656 21.9653 58.656 23.16C58.656 24.3547 58.9827 25.3067 59.636 26.016C60.308 26.7067 61.12 27.052 62.072 27.052C63.024 27.052 63.8267 26.7067 64.48 26.016C65.152 25.3253 65.488 24.3827 65.488 23.188ZM83.2599 15.208C85.0892 15.208 86.5452 15.8053 87.6279 17C88.7292 18.176 89.2799 19.8 89.2799 21.872V31H84.5199V22.516C84.5199 21.4707 84.2492 20.6587 83.7079 20.08C83.1666 19.5013 82.4386 19.212 81.5239 19.212C80.6092 19.212 79.8812 19.5013 79.3399 20.08C78.7986 20.6587 78.5279 21.4707 78.5279 22.516V31H73.7399V15.376H78.5279V17.448C79.0132 16.7573 79.6666 16.216 80.4879 15.824C81.3092 15.4133 82.2332 15.208 83.2599 15.208ZM91.6551 23.16C91.6551 21.5547 91.9538 20.1453 92.5511 18.932C93.1671 17.7187 93.9978 16.7853 95.0431 16.132C96.0884 15.4787 97.2551 15.152 98.5431 15.152C99.6444 15.152 100.606 15.376 101.427 15.824C102.267 16.272 102.911 16.86 103.359 17.588V15.376H108.147V31H103.359V28.788C102.892 29.516 102.239 30.104 101.399 30.552C100.578 31 99.6164 31.224 98.5151 31.224C97.2458 31.224 96.0884 30.8973 95.0431 30.244C93.9978 29.572 93.1671 28.6293 92.5511 27.416C91.9538 26.184 91.6551 24.7653 91.6551 23.16ZM103.359 23.188C103.359 21.9933 103.023 21.0507 102.351 20.36C101.698 19.6693 100.895 19.324 99.9431 19.324C98.9911 19.324 98.1791 19.6693 97.5071 20.36C96.8538 21.032 96.5271 21.9653 96.5271 23.16C96.5271 24.3547 96.8538 25.3067 97.5071 26.016C98.1791 26.7067 98.9911 27.052 99.9431 27.052C100.895 27.052 101.698 26.7067 102.351 26.016C103.023 25.3253 103.359 24.3827 103.359 23.188ZM121.159 31L116.399 24.448V31H111.611V10.28H116.399V21.732L121.131 15.376H127.039L120.543 23.216L127.095 31H121.159ZM135.276 31.224C133.913 31.224 132.7 30.9907 131.636 30.524C130.572 30.0573 129.732 29.4227 129.116 28.62C128.5 27.7987 128.154 26.884 128.08 25.876H132.812C132.868 26.4173 133.12 26.856 133.568 27.192C134.016 27.528 134.566 27.696 135.22 27.696C135.817 27.696 136.274 27.584 136.592 27.36C136.928 27.1173 137.096 26.8093 137.096 26.436C137.096 25.988 136.862 25.6613 136.396 25.456C135.929 25.232 135.173 24.9893 134.128 24.728C133.008 24.4667 132.074 24.196 131.328 23.916C130.581 23.6173 129.937 23.16 129.396 22.544C128.854 21.9093 128.584 21.06 128.584 19.996C128.584 19.1 128.826 18.288 129.312 17.56C129.816 16.8133 130.544 16.2253 131.496 15.796C132.466 15.3667 133.614 15.152 134.94 15.152C136.9 15.152 138.44 15.6373 139.56 16.608C140.698 17.5787 141.352 18.8667 141.52 20.472H137.096C137.021 19.9307 136.778 19.5013 136.368 19.184C135.976 18.8667 135.453 18.708 134.8 18.708C134.24 18.708 133.81 18.82 133.512 19.044C133.213 19.2493 133.064 19.5387 133.064 19.912C133.064 20.36 133.297 20.696 133.764 20.92C134.249 21.144 134.996 21.368 136.004 21.592C137.161 21.8907 138.104 22.1893 138.832 22.488C139.56 22.768 140.194 23.2347 140.736 23.888C141.296 24.5227 141.585 25.3813 141.604 26.464C141.604 27.3787 141.342 28.2 140.82 28.928C140.316 29.6373 139.578 30.1973 138.608 30.608C137.656 31.0187 136.545 31.224 135.276 31.224ZM159.261 22.936C159.261 23.384 159.233 23.8507 159.177 24.336H148.341C148.416 25.3067 148.724 26.0533 149.265 26.576C149.825 27.08 150.506 27.332 151.309 27.332C152.504 27.332 153.334 26.828 153.801 25.82H158.897C158.636 26.8467 158.16 27.7707 157.469 28.592C156.797 29.4133 155.948 30.0573 154.921 30.524C153.894 30.9907 152.746 31.224 151.477 31.224C149.946 31.224 148.584 30.8973 147.389 30.244C146.194 29.5907 145.261 28.6573 144.589 27.444C143.917 26.2307 143.581 24.812 143.581 23.188C143.581 21.564 143.908 20.1453 144.561 18.932C145.233 17.7187 146.166 16.7853 147.361 16.132C148.556 15.4787 149.928 15.152 151.477 15.152C152.989 15.152 154.333 15.4693 155.509 16.104C156.685 16.7387 157.6 17.644 158.253 18.82C158.925 19.996 159.261 21.368 159.261 22.936ZM154.361 21.676C154.361 20.8547 154.081 20.2013 153.521 19.716C152.961 19.2307 152.261 18.988 151.421 18.988C150.618 18.988 149.937 19.2213 149.377 19.688C148.836 20.1547 148.5 20.8173 148.369 21.676H154.361ZM171.391 15.208C173.183 15.208 174.62 15.8053 175.703 17C176.785 18.176 177.327 19.8 177.327 21.872V31H172.567V22.516C172.567 21.4707 172.296 20.6587 171.755 20.08C171.213 19.5013 170.485 19.212 169.571 19.212C168.656 19.212 167.928 19.5013 167.387 20.08C166.845 20.6587 166.575 21.4707 166.575 22.516V31H161.787V10.28H166.575V17.476C167.06 16.7853 167.723 16.2347 168.563 15.824C169.403 15.4133 170.345 15.208 171.391 15.208ZM179.702 23.16C179.702 21.5547 180.001 20.1453 180.598 18.932C181.214 17.7187 182.045 16.7853 183.09 16.132C184.135 15.4787 185.302 15.152 186.59 15.152C187.691 15.152 188.653 15.376 189.474 15.824C190.314 16.272 190.958 16.86 191.406 17.588V15.376H196.194V31H191.406V28.788C190.939 29.516 190.286 30.104 189.446 30.552C188.625 31 187.663 31.224 186.562 31.224C185.293 31.224 184.135 30.8973 183.09 30.244C182.045 29.572 181.214 28.6293 180.598 27.416C180.001 26.184 179.702 24.7653 179.702 23.16ZM191.406 23.188C191.406 21.9933 191.07 21.0507 190.398 20.36C189.745 19.6693 188.942 19.324 187.99 19.324C187.038 19.324 186.226 19.6693 185.554 20.36C184.901 21.032 184.574 21.9653 184.574 23.16C184.574 24.3547 184.901 25.3067 185.554 26.016C186.226 26.7067 187.038 27.052 187.99 27.052C188.942 27.052 189.745 26.7067 190.398 26.016C191.07 25.3253 191.406 24.3827 191.406 23.188ZM208.366 26.94V31H205.93C204.194 31 202.841 30.58 201.87 29.74C200.899 28.8813 200.414 27.4907 200.414 25.568V19.352H198.51V15.376H200.414V11.568H205.202V15.376H208.338V19.352H205.202V25.624C205.202 26.0907 205.314 26.4267 205.538 26.632C205.762 26.8373 206.135 26.94 206.658 26.94H208.366Z" fill="white"/>
        </svg>                                 

        <p class="text-sm leading-loose text-white sm:text-sm">Bidang E-Goverment <br> Dinas Komunikasi dan Informatika <br> Kajen Kabupaten Pekalongan 51161<br> Jawa Tengah, Indonesia  </p>
        <div class="flex flex-row gap-x-4">

          <!-- phone -->

          <div class="bg-white w-fit rounded-full flex p-2 items-center">
            <a href="#">
              <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.89803 17.1047C12.7124 21.9181 17.1737 22.4452 18.4834 22.494C20.0661 22.5516 21.6813 21.2596 22.38 19.9364C21.2656 18.6295 19.8144 17.6155 18.2255 16.5163C17.2877 17.4527 16.1319 19.1928 14.5931 18.5694C13.7179 18.2176 11.5567 17.2224 9.66852 15.3333C7.78033 13.4443 6.7849 11.2848 6.43055 10.411C5.80699 8.86998 7.55244 7.71201 8.49028 6.77437C7.39092 5.15947 6.39424 3.67101 5.08953 2.61319C3.74726 3.31423 2.44756 4.91661 2.50641 6.52024C2.55525 7.82969 3.08239 12.2901 7.89803 17.1047ZM18.3908 24.9964C16.5877 24.9301 11.4778 24.224 6.12628 18.8748C0.77599 13.5244 0.0710476 8.41681 0.0034333 6.61288C-0.096736 3.8638 2.00932 1.19358 4.44219 0.150779C4.73515 0.0242999 5.05598 -0.0238547 5.37317 0.0110409C5.69037 0.0459365 5.99305 0.162683 6.2515 0.349825C8.2649 1.81826 9.6535 4.04281 10.8468 5.7854C11.095 6.14775 11.2087 6.58547 11.1682 7.02279C11.1278 7.46012 10.9357 7.86954 10.6251 8.18021L8.92727 9.87898C9.32169 10.749 10.1243 12.2488 11.439 13.5632C12.7537 14.8777 14.2538 15.6801 15.1252 16.0744L16.8219 14.3769C17.1334 14.0652 17.5447 13.8729 17.9838 13.8337C18.4228 13.7946 18.8616 13.9111 19.2234 14.1628C21.0014 15.3947 23.09 16.763 24.6125 18.7121C24.8149 18.9724 24.9436 19.2822 24.9853 19.6092C25.0269 19.9363 24.9799 20.2685 24.8492 20.5711C23.8012 23.016 21.1492 25.0978 18.3908 24.9964Z" fill="#00A4C7"/>
              </svg>                                                               
            </a>
          </div>

          <!-- instagram -->

          <div class="bg-white w-fit rounded-full flex p-2 items-center">
            <a href="#">
              <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.5 6.25C10.8424 6.25 9.25269 6.90848 8.08058 8.08058C6.90848 9.25269 6.25 10.8424 6.25 12.5C6.25 14.1576 6.90848 15.7473 8.08058 16.9194C9.25269 18.0915 10.8424 18.75 12.5 18.75C14.1576 18.75 15.7473 18.0915 16.9194 16.9194C18.0915 15.7473 18.75 14.1576 18.75 12.5C18.75 10.8424 18.0915 9.25269 16.9194 8.08058C15.7473 6.90848 14.1576 6.25 12.5 6.25ZM12.5 16.559C11.9668 16.559 11.4388 16.454 10.9462 16.2499C10.4536 16.0459 10.0059 15.7468 9.62891 15.3697C9.25187 14.9927 8.95279 14.5451 8.74874 14.0525C8.54469 13.5598 8.43966 13.0319 8.43966 12.4986C8.43966 11.9654 8.54469 11.4374 8.74874 10.9448C8.95279 10.4522 9.25187 10.0046 9.62891 9.62756C10.0059 9.25052 10.4536 8.95144 10.9462 8.74739C11.4388 8.54333 11.9668 8.43831 12.5 8.43831C13.5769 8.43831 14.6096 8.8661 15.3711 9.62756C16.1326 10.389 16.5603 11.4218 16.5603 12.4986C16.5603 13.5755 16.1326 14.6083 15.3711 15.3697C14.6096 16.1312 13.5769 16.559 12.5 16.559Z" fill="#00A4C7"/>
                <path d="M19.271 7.2915C20.1339 7.2915 20.8335 6.59195 20.8335 5.729C20.8335 4.86606 20.1339 4.1665 19.271 4.1665C18.4081 4.1665 17.7085 4.86606 17.7085 5.729C17.7085 6.59195 18.4081 7.2915 19.271 7.2915Z" fill="#00A4C7"/>
                <path d="M24.3378 4.30528C24.0168 3.47641 23.5258 2.7237 22.8963 2.09543C22.2668 1.46716 21.5128 0.977214 20.6825 0.657019C19.7112 0.29281 18.685 0.0959542 17.6477 0.0748502C16.3108 0.0166333 15.8874 0 12.4972 0C9.10706 0 8.67253 -1.3942e-07 7.34673 0.0748502C6.31037 0.0962671 5.28515 0.293118 4.31475 0.657019C3.48447 0.977214 2.7304 1.46716 2.10092 2.09543C1.47143 2.7237 0.980437 3.47641 0.659429 4.30528C0.295127 5.27513 0.0984357 6.29972 0.0777432 7.33533C0.0180475 8.66877 0 9.09154 0 12.4778C0 15.8641 -1.03434e-08 16.2938 0.0777432 17.6203C0.0985673 18.6571 0.294314 19.6801 0.659429 20.6518C0.98059 21.4808 1.4718 22.2335 2.10153 22.8618C2.73126 23.4901 3.48561 23.98 4.31614 24.3C5.28449 24.6783 6.31026 24.8892 7.34951 24.9238C8.68642 24.982 9.10984 25 12.5 25C15.8902 25 16.3247 25 17.6505 24.9238C18.6877 24.9031 19.7139 24.7067 20.6853 24.343C21.5157 24.0226 22.2698 23.5325 22.8993 22.904C23.5288 22.2754 24.0197 21.5225 24.3406 20.6933C24.7057 19.7231 24.9014 18.7001 24.9223 17.6633C24.982 16.3298 25 15.9071 25 12.5208C25 9.13451 25 8.70481 24.9223 7.3783C24.9056 6.32805 24.7079 5.28852 24.3378 4.30528ZM22.6469 17.5177C22.6391 18.3167 22.493 19.1083 22.2151 19.8575C22.0057 20.396 21.6862 20.8849 21.277 21.2933C20.8677 21.7016 20.3778 22.0203 19.8384 22.2292C19.0959 22.5038 18.3118 22.6496 17.52 22.6602C16.2011 22.7212 15.8291 22.7365 12.4472 22.7365C9.06264 22.7365 8.71696 22.7365 7.37311 22.6602C6.58181 22.6495 5.79817 22.5037 5.05609 22.2292C4.51488 22.0215 4.02306 21.7033 3.61212 21.2949C3.20118 20.8865 2.88017 20.3969 2.66965 19.8575C2.39729 19.1159 2.25135 18.3339 2.23789 17.5441C2.1782 16.2273 2.16432 15.8558 2.16432 12.4792C2.16432 9.10263 2.16432 8.7561 2.23789 7.41295C2.24582 6.61448 2.39189 5.82338 2.66965 5.07457C3.09307 3.98093 3.96074 3.12015 5.05609 2.70154C5.79817 2.42702 6.58181 2.28123 7.37311 2.27046C8.69336 2.21086 9.06403 2.19422 12.4472 2.19422C15.8305 2.19422 16.1775 2.19422 17.52 2.27046C18.3118 2.28107 19.0959 2.42687 19.8384 2.70154C20.378 2.91051 20.868 3.22945 21.2772 3.63803C21.6864 4.04662 22.0058 4.53586 22.2151 5.07457C22.4875 5.81621 22.6334 6.59819 22.6469 7.388C22.7066 8.7062 22.7218 9.07629 22.7218 12.4543C22.7218 15.8322 22.7218 16.194 22.6622 17.5191L22.6469 17.5177Z" fill="#00A4C7"/>
              </svg>                                                                          
            </a>
          </div>

          <!-- facebook -->

          <div class="bg-white w-fit rounded-full flex p-2 items-center">
            <a href="#">
              <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.8684 8.67125V10.3925H9.6084V12.4962H10.8684V18.75H13.4584V12.4962H15.1959C15.1959 12.4962 15.3596 11.4875 15.4384 10.3837H13.4684V8.94625C13.4684 8.73 13.7509 8.44125 14.0309 8.44125H15.4409V6.25H13.5221C10.8046 6.25 10.8684 8.35625 10.8684 8.67125Z" fill="#00A4C7"/>
                <path d="M12.5 22.5C15.1522 22.5 17.6957 21.4464 19.5711 19.5711C21.4464 17.6957 22.5 15.1522 22.5 12.5C22.5 9.84783 21.4464 7.3043 19.5711 5.42893C17.6957 3.55357 15.1522 2.5 12.5 2.5C9.84783 2.5 7.3043 3.55357 5.42893 5.42893C3.55357 7.3043 2.5 9.84783 2.5 12.5C2.5 15.1522 3.55357 17.6957 5.42893 19.5711C7.3043 21.4464 9.84783 22.5 12.5 22.5ZM12.5 25C5.59625 25 0 19.4037 0 12.5C0 5.59625 5.59625 0 12.5 0C19.4037 0 25 5.59625 25 12.5C25 19.4037 19.4037 25 12.5 25Z" fill="#00A4C7"/>
              </svg>                                      
            </a>
          </div>

          <!-- web -->

          <div class="bg-white w-fit rounded-full flex p-2 items-center">
            <a href="#">
              <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 12.5C0 15.8152 1.31696 18.9946 3.66117 21.3388C6.00537 23.683 9.18479 25 12.5 25C15.8152 25 18.9946 23.683 21.3388 21.3388C23.683 18.9946 25 15.8152 25 12.5C25 9.18479 23.683 6.00537 21.3388 3.66117C18.9946 1.31696 15.8152 0 12.5 0C9.18479 0 6.00537 1.31696 3.66117 3.66117C1.31696 6.00537 0 9.18479 0 12.5ZM22.8571 12.5C22.8571 15.2469 21.7659 17.8813 19.8236 19.8236C17.8813 21.7659 15.2469 22.8571 12.5 22.8571C9.75312 22.8571 7.11874 21.7659 5.17639 19.8236C3.23405 17.8813 2.14286 15.2469 2.14286 12.5C2.14286 9.75312 3.23405 7.11874 5.17639 5.17639C7.11874 3.23405 9.75312 2.14286 12.5 2.14286C15.2469 2.14286 17.8813 3.23405 19.8236 5.17639C21.7659 7.11874 22.8571 9.75312 22.8571 12.5Z" fill="#00A4C7"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.14258 12.5001C7.14258 18.9601 9.27258 24.2858 12.4997 24.2858C15.7269 24.2858 17.8569 18.9601 17.8569 12.5001C17.8569 6.04007 15.7269 0.714355 12.4997 0.714355C9.27258 0.714355 7.14258 6.04007 7.14258 12.5001ZM15.714 12.5001C15.714 17.8744 14.0069 22.1429 12.4997 22.1429C10.9926 22.1429 9.28544 17.8744 9.28544 12.5001C9.28544 7.12578 10.9926 2.85721 12.4997 2.85721C14.0069 2.85721 15.714 7.12578 15.714 12.5001Z" fill="#00A4C7"/>
                <path d="M3.36007 6.02461L4.79721 4.43604C4.94007 4.56556 5.09483 4.6927 5.2615 4.81746C7.07721 6.17746 9.97578 7.01746 13.1401 7.01746C15.8415 7.01746 18.3586 6.40746 20.1844 5.36318C20.6253 5.1108 21.0153 4.83937 21.3544 4.54889L22.7458 6.17889C22.302 6.55889 21.8029 6.90651 21.2486 7.22175C19.0829 8.46175 16.2001 9.15889 13.1401 9.15889C9.53721 9.15889 6.19007 8.19032 3.97578 6.53175C3.76279 6.37235 3.55733 6.20312 3.36007 6.02461ZM3.36007 18.9989L4.79721 20.5875C4.94007 20.4579 5.09483 20.3308 5.2615 20.206C7.07721 18.846 9.97578 18.006 13.1401 18.006C15.8415 18.006 18.3586 18.616 20.1844 19.6603C20.6253 19.9127 21.0153 20.1841 21.3544 20.4746L22.7458 18.8446C22.2796 18.4521 21.7784 18.103 21.2486 17.8018C19.0829 16.5618 16.2001 15.8646 13.1401 15.8646C9.53721 15.8646 6.19007 16.8332 3.97578 18.4918C3.76279 18.6512 3.55733 18.8204 3.36007 18.9989ZM0.714355 13.5717V11.4289H24.2858V13.5717H0.714355Z" fill="#00A4C7"/>
              </svg>                               
            </a>
          </div>
        </div>
      </div>

      <!-- sitemap1 -->

      <div class="flex flex-col gap-y-7">
        <h3 class="text-white font-bold text-lg">Informasi Publik</h3>
        <ul class="flex flex-col gap-y-2">
          <li>
            <a href="#" class="text-sm text-white hover:text-foot sm:text-sm">
              Berita
            </a>
          </li>
          <li>
            <a href="#" class="text-sm text-white hover:text-foot sm:text-sm">
              Artikel
            </a>
          </li>
          <li>
            <a href="#" class="text-sm text-white hover:text-foot sm:text-sm">
              Open Data
            </a>
          </li>
          <li>
            <a href="#" class="text-sm text-white hover:text-foot sm:text-sm">
              Pengumuman
            </a>
          </li>
        </ul>
      </div>

      <!-- sitemap2 -->

      <div class="flex flex-col gap-y-7">
        <h3 class="text-white font-bold text-lg">Tentang</h3>
        <ul class="flex flex-col gap-y-2">
          <li>
            <a href="#" class="text-sm text-white hover:text-foot sm:text-sm">
              Profil
            </a>
          </li>
          <li>
            <a href="#" class="text-sm text-white hover:text-foot sm:text-sm">
              Visi & Misi
            </a>
          </li>
          <li>
            <a href="#" class="text-sm text-white hover:text-foot sm:text-sm">
              Struktur Organisasi
            </a>
          </li>
          <li>
            <a href="#" class="text-sm text-white hover:text-foot sm:text-sm">
              Data Pegawai
            </a>
          </li>
        </ul>
      </div>

      <!-- sitemap3 -->

      <div class="flex flex-col gap-y-7">
        <h3 class="text-white font-bold text-lg">Bantuan</h3>
        <ul class="flex flex-col gap-y-2">
          <li>
            <a href="../src/guide.html" class="text-sm text-white hover:text-foot sm:text-sm">
              Panduan Pengguna
            </a>
          </li>
          <li>
            <a href="../src/report.html" class="text-sm text-white hover:text-foot sm:text-sm">
              Lapor Kendala Layanan
            </a>
          </li>            
          <li>
            <a href="../src/contributors.html" class="text-sm text-white hover:text-foot sm:text-sm">
              Kontributor
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="mt-2 flex items-center justify-center gap-x-6">                  
      <h3 class="text-sm sm:text-xs text-center text-white sm:mb-4"><span>&#169</span> 2024 egoverse - Dinkominfo Kabupaten Pekalongan</h3>
    </div>
  </section>
  
</body>
</html>