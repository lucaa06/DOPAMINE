<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
?>
<html>
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Public+Sans%3Awght%40400%3B500%3B700%3B900"
    />

    <title>Stitch Design</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  </head>
  <body>
    <div class="relative flex size-full min-h-screen flex-col bg-white group/design-root overflow-x-hidden" style='font-family: "Public Sans", "Noto Sans", sans-serif;'>
      <div class="layout-container flex h-full grow flex-col">
        <div class="gap-1 px-6 flex flex-1 justify-center py-5">
          <div class="layout-content-container flex flex-col w-80">
            <div class="flex h-full min-h-[700px] flex-col justify-between bg-white p-4">
              <div class="flex flex-col gap-4">
                <h1 class="text-[#141414] text-base font-medium leading-normal">DOPAMINE</h1>
                <div class="flex flex-col gap-2">
                  <div class="flex items-center gap-3 px-3 py-2 rounded-full bg-[#f2f2f2]">
                    <div class="text-[#141414]" data-icon="House" data-size="24px" data-weight="fill">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M224,115.55V208a16,16,0,0,1-16,16H168a16,16,0,0,1-16-16V168a8,8,0,0,0-8-8H112a8,8,0,0,0-8,8v40a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V115.55a16,16,0,0,1,5.17-11.78l80-75.48.11-.11a16,16,0,0,1,21.53,0,1.14,1.14,0,0,0,.11.11l80,75.48A16,16,0,0,1,224,115.55Z"
                        ></path>
                      </svg>
                    </div>
                    <p class="text-[#141414] text-sm font-medium leading-normal">Home</p>
                  </div>
                  <div class="flex items-center gap-3 px-3 py-2">
                    <div class="text-[#141414]" data-icon="MagnifyingGlass" data-size="24px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"
                        ></path>
                      </svg>
                    </div>
                    <p class="text-[#141414] text-sm font-medium leading-normal">Explore</p>
                  </div>
                  <div class="flex items-center gap-3 px-3 py-2">
                    <div class="text-[#141414]" data-icon="Bell" data-size="24px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M221.8,175.94C216.25,166.38,208,139.33,208,104a80,80,0,1,0-160,0c0,35.34-8.26,62.38-13.81,71.94A16,16,0,0,0,48,200H88.81a40,40,0,0,0,78.38,0H208a16,16,0,0,0,13.8-24.06ZM128,216a24,24,0,0,1-22.62-16h45.24A24,24,0,0,1,128,216ZM48,184c7.7-13.24,16-43.92,16-80a64,64,0,1,1,128,0c0,36.05,8.28,66.73,16,80Z"
                        ></path>
                      </svg>
                    </div>
                    <p class="text-[#141414] text-sm font-medium leading-normal">Notifications</p>
                  </div>
                  <div class="flex items-center gap-3 px-3 py-2">
                    <div class="text-[#141414]" data-icon="Envelope" data-size="24px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M224,48H32a8,8,0,0,0-8,8V192a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A8,8,0,0,0,224,48Zm-96,85.15L52.57,64H203.43ZM98.71,128,40,181.81V74.19Zm11.84,10.85,12,11.05a8,8,0,0,0,10.82,0l12-11.05,58,53.15H52.57ZM157.29,128,216,74.18V181.82Z"
                        ></path>
                      </svg>
                    </div>
                    <p class="text-[#141414] text-sm font-medium leading-normal">Messages</p>
                  </div>
                  <div class="flex items-center gap-3 px-3 py-2">
                    <a href="assets/pages/visualization.php" class="flex items-center gap-3">
                        <div class="text-[#141414]" data-icon="Tree" data-size="24px" data-weight="regular">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tree"><path d="M12 22V16M16 12H8M12 16V12M12 12H8M12 12H16M12 12V8M12 8H8M12 8H16M12 8V4M8 4H16"/></svg>
                        </div>
                        <p class="text-[#141414] text-sm font-medium leading-normal">Visualization</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="flex flex-col gap-3 p-4">
              <div class="flex gap-6 justify-between">
                <p class="text-[#141414] text-base font-medium leading-normal">Time spent on site</p>
                <p class="text-[#141414] text-sm font-normal leading-normal">25%</p>
              </div>
              <div class="rounded bg-[#e0e0e0]"><div class="h-2 rounded bg-[#141414]" style="width: 25%;"></div></div>
              <p class="text-[#757575] text-sm font-normal leading-normal">25% complete</p>
            </div>
            <h3 class="text-[#141414] tracking-light text-2xl font-bold leading-tight px-4 text-center pb-2 pt-5">Phrase of the Day, Sophia</h3>
            <p class="text-[#141414] text-base font-normal leading-normal pb-3 pt-1 px-4 text-center">Every day may not be good, but there's something good in every day.</p>
            <h2 class="text-[#141414] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Suggestions for You</h2>
            <div class="flex overflow-y-auto [-ms-scrollbar-style:none] [scrollbar-width:none] [&amp;::-webkit-scrollbar]:hidden">
              <div class="flex items-stretch p-4 gap-3">
                <div class="flex h-full flex-1 flex-col gap-4 rounded-lg min-w-40">
                  <div
                    class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl flex flex-col"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC7j9Q1ANRIGr5HEVRQzOg0JkBSGctMet5irC4jt19TG4SuWTP6Tr2nZWMjah6wggKr7XUipILC0XsetfkP2861jBDg_LY_7VAeYy0XdgSQ7lOZ5W0N4_L8Ybswgu4XTjvmLW2J2ASBPFwNUdn3eW4o3FvIxqQrP2WJahVivnQP4D93BQBEMIYwDWDoaemQkxBMLLR7lXeYMsataaLmHwfxr1tUyQi_nRYxWAsjv2WXFWZEs7Bei9Hap8P_yuitj5-3D9aS5R_Mcg0T");'
                  ></div>
                  <div>
                    <p class="text-[#141414] text-base font-medium leading-normal">Community Garden Success</p>
                    <p class="text-[#757575] text-sm font-normal leading-normal">Local garden thrives</p>
                  </div>
                </div>
                <div class="flex h-full flex-1 flex-col gap-4 rounded-lg min-w-40">
                  <div
                    class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl flex flex-col"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDrz-Q11bO28y6skoKGf2kTmH-6LkUEAqT1KepKjR3P9gZHwjqGrCxxRbiv3mTuwBWKaIL4DMDk6-kdcSvqautXyVvVON_5V-FRhZzJ49292gKqFFaRyaYQN0rtDhvnb8IiBXLNxhfnvcmPYZPQmbs1KKY3UyoZW0RdKdJfsOCkxYCMS7-Exeg639oxMZ2fhzrrtnvxDvlvkyR2ve9Nh2UwP4QVz0bcpxt4dBib6feqdFYxQ9vqCZQn7YoT4PBjq5kPRxzUvYo5F8p2");'
                  ></div>
                  <div>
                    <p class="text-[#141414] text-base font-medium leading-normal">Park Opening</p>
                    <p class="text-[#757575] text-sm font-normal leading-normal">New park downtown</p>
                  </div>
                </div>
                <div class="flex h-full flex-1 flex-col gap-4 rounded-lg min-w-40">
                  <div
                    class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl flex flex-col"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCwo0f4UdtUp5t2JmFCc67P7EBFrDj_X8YR5mwSrmmOj6q1PQkNnVmXZKQNZg0hcwIzyaEQR38W4odu3CCvtc4jGvp8CDV2WjlLtM1IAmdQCMXVEuwPYcksfpbgxDGMmJ2iiuyHFmSh_h4taU9RZyvA6xJpa8xzUBaGA4wcuTqDypBzbkNc5eTsSgdVuOPfKHMWD1cIC80-2_9j30oXhOR6G6HuecupMEY_K0aj1q_krxSD1hDQhjcA7TAP6ezN3KiHJwX2jxf1cziz");'
                  ></div>
                  <div>
                    <p class="text-[#141414] text-base font-medium leading-normal">Shelter Adoption</p>
                    <p class="text-[#757575] text-sm font-normal leading-normal">Pets find homes</p>
                  </div>
                </div>
              </div>
            </div>
            <h2 class="text-[#141414] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Recent Posts</h2>
            <div id="posts-container" class="p-4">
              <!-- Posts will be dynamically inserted here -->
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    fetch('backend/posts.php')
                        .then(response => response.json())
                        .then(posts => {
                            const postsContainer = document.getElementById('posts-container');
                            posts.forEach(post => {
                                const postElement = document.createElement('div');
                                postElement.className = 'bg-cover bg-center flex flex-col items-stretch justify-end rounded-xl pt-[132px] mb-4';
                                postElement.style.backgroundImage = `linear-gradient(0deg, rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0) 100%), url(${post.image_url})`;
                                postElement.innerHTML = `
                                    <div class="flex w-full items-end justify-between gap-4 p-4">
                                      <div class="flex max-w-[440px] flex-1 flex-col gap-1">
                                        <p class="text-white tracking-light text-2xl font-bold leading-tight max-w-[440px]">${post.content}</p>
                                        <p class="text-white text-base font-medium leading-normal">
                                          by ${post.username}
                                        </p>
                                      </div>
                                    </div>
                                `;
                                postsContainer.appendChild(postElement);
                            });
                        });
                });
            </script>
            <div class="flex flex-wrap gap-4 px-4 py-2 py-2 justify-between">
              <div class="flex items-center justify-center gap-2 px-3 py-2">
                <div class="text-[#757575]" data-icon="ChatCircleDots" data-size="24px" data-weight="regular">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                    <path
                      d="M140,128a12,12,0,1,1-12-12A12,12,0,0,1,140,128ZM84,116a12,12,0,1,0,12,12A12,12,0,0,0,84,116Zm88,0a12,12,0,1,0,12,12A12,12,0,0,0,172,116Zm60,12A104,104,0,0,1,79.12,219.82L45.07,231.17a16,16,0,0,1-20.24-20.24l11.35-34.05A104,104,0,1,1,232,128Zm-16,0A88,88,0,1,0,51.81,172.06a8,8,0,0,1,.66,6.54L40,216,77.4,203.53a7.85,7.85,0,0,1,2.53-.42,8,8,0,0,1,4,1.08A88,88,0,0,0,216,128Z"
                    ></path>
                  </svg>
                </div>
                <p class="text-[#757575] text-[13px] font-bold leading-normal tracking-[0.015em]">12</p>
              </div>
              <div class="flex items-center justify-center gap-2 px-3 py-2">
                <div class="text-[#757575]" data-icon="Smiley" data-size="24px" data-weight="regular">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                    <path
                      d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216ZM80,108a12,12,0,1,1,12,12A12,12,0,0,1,80,108Zm96,0a12,12,0,1,1-12-12A12,12,0,0,1,176,108Zm-1.07,48c-10.29,17.79-27.4,28-46.93,28s-36.63-10.2-46.92-28a8,8,0,1,1,13.84-8c7.47,12.91,19.21,20,33.08,20s25.61-7.1,33.07-20a8,8,0,0,1,13.86,8Z"
                    ></path>
                  </svg>
                </div>
                <p class="text-[#757575] text-[13px] font-bold leading-normal tracking-[0.015em]">34</p>
              </div>
              <div class="flex items-center justify-center gap-2 px-3 py-2">
                <div class="text-[#757575]" data-icon="Heart" data-size="24px" data-weight="regular">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                    <path
                      d="M178,32c-20.65,0-38.73,8.88-50,23.89C116.73,40.88,98.65,32,78,32A62.07,62.07,0,0,0,16,94c0,70,103.79,126.66,108.21,129a8,8,0,0,0,7.58,0C136.21,220.66,240,164,240,94A62.07,62.07,0,0,0,178,32ZM128,206.8C109.74,196.16,32,147.69,32,94A46.06,46.06,0,0,1,78,48c19.45,0,35.78,10.36,42.6,27a8,8,0,0,0,14.8,0c6.82-16.67,23.15-27,42.6-27a46.06,46.06,0,0,1,46,46C224,147.61,146.24,196.15,128,206.8Z"
                    ></path>
                  </svg>
                </div>
                <p class="text-[#757575] text-[13px] font-bold leading-normal tracking-[0.015em]">56</p>
              </div>
              <div class="flex items-center justify-center gap-2 px-3 py-2">
                <div class="text-[#757575]" data-icon="ThumbsDown" data-size="24px" data-weight="regular">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                    <path
                      d="M239.82,157l-12-96A24,24,0,0,0,204,40H32A16,16,0,0,0,16,56v88a16,16,0,0,0,16,16H75.06l37.78,75.58A8,8,0,0,0,120,240a40,40,0,0,0,40-40V184h56a24,24,0,0,0,23.82-27ZM72,144H32V56H72Zm150,21.29a7.88,7.88,0,0,1-6,2.71H152a8,8,0,0,0-8,8v24a24,24,0,0,1-19.29,23.54L88,150.11V56H204a8,8,0,0,1,7.94,7l12,96A7.87,7.87,0,0,1,222,165.29Z"
                    ></path>
                  </svg>
                </div>
                <p class="text-[#757575] text-[13px] font-bold leading-normal tracking-[0.015em]">7</p>
              </div>
            </div>
            <div class="p-4">
              <div
                class="bg-cover bg-center flex flex-col items-stretch justify-end rounded-xl pt-[132px]"
                style='background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuAzv9COhvKWABS8bEsTvo5kbybB_HXnNNXM0aWVW_hX0vp9geEC0bIU3tecPprT7JPYZMbxvKFCyOFLSAtdMTj4nqSkwyKdupQmEYm_UvtFoU5beJvrvrcCTOsOdS0q55uDKji43Qdg6dr4B-qh2QbfXzJ701QbfPV4EABo1RBYx-7UxolEEObRidK8JSRQJ5MRZnaUr83PK_QDZGazbxHHif-8MAkQP6R4KChlxgNZW7UgC_nbivnOebO1HOSAhgj-AEXoYJ3bAt2d");'
              >
                <div class="flex w-full items-end justify-between gap-4 p-4">
                  <div class="flex max-w-[440px] flex-1 flex-col gap-1">
                    <p class="text-white tracking-light text-2xl font-bold leading-tight max-w-[440px]">
                      A new park opened downtown, offering a beautiful space for relaxation and recreation.
                    </p>
                    <p class="text-white text-base font-medium leading-normal">
                      The park features walking trails, a playground, and picnic areas, enhancing the quality of life for residents.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="flex flex-wrap gap-4 px-4 py-2 py-2 justify-between">
              <div class="flex items-center justify-center gap-2 px-3 py-2">
                <div class="text-[#757575]" data-icon="ChatCircleDots" data-size="24px" data-weight="regular">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                    <path
                      d="M140,128a12,12,0,1,1-12-12A12,12,0,0,1,140,128ZM84,116a12,12,0,1,0,12,12A12,12,0,0,0,84,116Zm88,0a12,12,0,1,0,12,12A12,12,0,0,0,172,116Zm60,12A104,104,0,0,1,79.12,219.82L45.07,231.17a16,16,0,0,1-20.24-20.24l11.35-34.05A104,104,0,1,1,232,128Zm-16,0A88,88,0,1,0,51.81,172.06a8,8,0,0,1,.66,6.54L40,216,77.4,203.53a7.85,7.85,0,0,1,2.53-.42,8,8,0,0,1,4,1.08A88,88,0,0,0,216,128Z"
                    ></path>
                  </svg>
                </div>
                <p class="text-[#757575] text-[13px] font-bold leading-normal tracking-[0.015em]">8</p>
              </div>
              <div class="flex items-center justify-center gap-2 px-3 py-2">
                <div class="text-[#757575]" data-icon="Smiley" data-size="24px" data-weight="regular">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                    <path
                      d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216ZM80,108a12,12,0,1,1,12,12A12,12,0,0,1,80,108Zm96,0a12,12,0,1,1-12-12A12,12,0,0,1,176,108Zm-1.07,48c-10.29,17.79-27.4,28-46.93,28s-36.63-10.2-46.92-28a8,8,0,1,1,13.84-8c7.47,12.91,19.21,20,33.08,20s25.61-7.1,33.07-20a8,8,0,0,1,13.86,8Z"
                    ></path>
                  </svg>
                </div>
                <p class="text-[#757575] text-[13px] font-bold leading-normal tracking-[0.015em]">22</p>
              </div>
              <div class="flex items-center justify-center gap-2 px-3 py-2">
                <div class="text-[#757575]" data-icon="Heart" data-size="24px" data-weight="regular">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                    <path
                      d="M178,32c-20.65,0-38.73,8.88-50,23.89C116.73,40.88,98.65,32,78,32A62.07,62.07,0,0,0,16,94c0,70,103.79,126.66,108.21,129a8,8,0,0,0,7.58,0C136.21,220.66,240,164,240,94A62.07,62.07,0,0,0,178,32ZM128,206.8C109.74,196.16,32,147.69,32,94A46.06,46.06,0,0,1,78,48c19.45,0,35.78,10.36,42.6,27a8,8,0,0,0,14.8,0c6.82-16.67,23.15-27,42.6-27a46.06,46.06,0,0,1,46,46C224,147.61,146.24,196.15,128,206.8Z"
                    ></path>
                  </svg>
                </div>
                <p class="text-[#757575] text-[13px] font-bold leading-normal tracking-[0.015em]">45</p>
              </div>
              <div class="flex items-center justify-center gap-2 px-3 py-2">
                <div class="text-[#757575]" data-icon="ThumbsDown" data-size="24px" data-weight="regular">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                    <path
                      d="M239.82,157l-12-96A24,24,0,0,0,204,40H32A16,16,0,0,0,16,56v88a16,16,0,0,0,16,16H75.06l37.78,75.58A8,8,0,0,0,120,240a40,40,0,0,0,40-40V184h56a24,24,0,0,0,23.82-27ZM72,144H32V56H72Zm150,21.29a7.88,7.88,0,0,1-6,2.71H152a8,8,0,0,0-8,8v24a24,24,0,0,1-19.29,23.54L88,150.11V56H204a8,8,0,0,1,7.94,7l12,96A7.87,7.87,0,0,1,222,165.29Z"
                    ></path>
                  </svg>
                </div>
                <p class="text-[#757575] text-[13px] font-bold leading-normal tracking-[0.015em]">3</p>
              </div>
            </div>
            <div class="p-4">
              <div
                class="bg-cover bg-center flex flex-col items-stretch justify-end rounded-xl pt-[132px]"
                style='background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuCiWm8LlvRtOdrMKUJqxnRCz8Dl2O3CCAAcy3nidWrbYk3x1RrqK1rs0jG2oJOcCNB3TRAuUvgtBBrAdHzv1yrWZtuUiTEt1UiMwtEl-HPxR2r69N597xTgLzZXWn8A8RG1wLhz36erEpKI3zzZQt2tvDseIYgsDKkTzYqDviflBFilLmEqKDgbzBnQqXYX-4CifyFhA1KfKW5a0TspK92BUvul_mR7-CnIPxDVzXPOSSYpAvqdpYrTl0mpuOC09j0_xU0_LD0qXfQ8");'
              >
                <div class="flex w-full items-end justify-between gap-4 p-4">
                  <div class="flex max-w-[440px] flex-1 flex-col gap-1">
                    <p class="text-white tracking-light text-2xl font-bold leading-tight max-w-[440px]">Local animal shelter finds homes for all its rescued pets this month!</p>
                    <p class="text-white text-base font-medium leading-normal">
                      Thanks to the community's support and adoption efforts, every animal at the shelter has found a loving home.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="flex flex-wrap gap-4 px-4 py-2 py-2 justify-between">
              <div class="flex items-center justify-center gap-2 px-3 py-2">
                <div class="text-[#757575]" data-icon="ChatCircleDots" data-size="24px" data-weight="regular">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                    <path
                      d="M140,128a12,12,0,1,1-12-12A12,12,0,0,1,140,128ZM84,116a12,12,0,1,0,12,12A12,12,0,0,0,84,116Zm88,0a12,12,0,1,0,12,12A12,12,0,0,0,172,116Zm60,12A104,104,0,0,1,79.12,219.82L45.07,231.17a16,16,0,0,1-20.24-20.24l11.35-34.05A104,104,0,1,1,232,128Zm-16,0A88,88,0,1,0,51.81,172.06a8,8,0,0,1,.66,6.54L40,216,77.4,203.53a7.85,7.85,0,0,1,2.53-.42,8,8,0,0,1,4,1.08A88,88,0,0,0,216,128Z"
                    ></path>
                  </svg>
                </div>
                <p class="text-[#757575] text-[13px] font-bold leading-normal tracking-[0.015em]">15</p>
              </div>
              <div class="flex items-center justify-center gap-2 px-3 py-2">
                <div class="text-[#757575]" data-icon="Smiley" data-size="24px" data-weight="regular">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                    <path
                      d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216ZM80,108a12,12,0,1,1,12,12A12,12,0,0,1,80,108Zm96,0a12,12,0,1,1-12-12A12,12,0,0,1,176,108Zm-1.07,48c-10.29,17.79-27.4,28-46.93,28s-36.63-10.2-46.92-28a8,8,0,1,1,13.84-8c7.47,12.91,19.21,20,33.08,20s25.61-7.1,33.07-20a8,8,0,0,1,13.86,8Z"
                    ></path>
                  </svg>
                </div>
                <p class="text-[#757575] text-[13px] font-bold leading-normal tracking-[0.015em]">40</p>
              </div>
              <div class="flex items-center justify-center gap-2 px-3 py-2">
                <div class="text-[#757575]" data-icon="Heart" data-size="24px" data-weight="regular">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                    <path
                      d="M178,32c-20.65,0-38.73,8.88-50,23.89C116.73,40.88,98.65,32,78,32A62.07,62.07,0,0,0,16,94c0,70,103.79,126.66,108.21,129a8,8,0,0,0,7.58,0C136.21,220.66,240,164,240,94A62.07,62.07,0,0,0,178,32ZM128,206.8C109.74,196.16,32,147.69,32,94A46.06,46.06,0,0,1,78,48c19.45,0,35.78,10.36,42.6,27a8,8,0,0,0,14.8,0c6.82-16.67,23.15-27,42.6-27a46.06,46.06,0,0,1,46,46C224,147.61,146.24,196.15,128,206.8Z"
                    ></path>
                  </svg>
                </div>
                <p class="text-[#757575] text-[13px] font-bold leading-normal tracking-[0.015em]">70</p>
              </div>
              <div class="flex items-center justify-center gap-2 px-3 py-2">
                <div class="text-[#757575]" data-icon="ThumbsDown" data-size="24px" data-weight="regular">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                    <path
                      d="M239.82,157l-12-96A24,24,0,0,0,204,40H32A16,16,0,0,0,16,56v88a16,16,0,0,0,16,16H75.06l37.78,75.58A8,8,0,0,0,120,240a40,40,0,0,0,40-40V184h56a24,24,0,0,0,23.82-27ZM72,144H32V56H72Zm150,21.29a7.88,7.88,0,0,1-6,2.71H152a8,8,0,0,0-8,8v24a24,24,0,0,1-19.29,23.54L88,150.11V56H204a8,8,0,0,1,7.94,7l12,96A7.87,7.87,0,0,1,222,165.29Z"
                    ></path>
                  </svg>
                </div>
                <p class="text-[#757575] text-[13px] font-bold leading-normal tracking-[0.015em]">5</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
