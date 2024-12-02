import { defineStore } from "pinia";
import Pro1 from "../assets/images/onion.png";
import Pro2 from "../assets/images/Group 1.png";
import Pro3 from "../assets/images/organic.png";
import Ca1 from "../assets/images/burger.png";
import Ca2 from "../assets/images/peach.png";
import Ca3 from "../assets/images/Kiwi.png";
import Ca4 from "../assets/images/apple.png";
import Ca5 from "../assets/images/snack.png";
import Ca6 from "../assets/images/plum.png";
import Ca7 from "../assets/images/vegetable.png";
import Ca8 from "../assets/images/headphone.png";
import Ca9 from "../assets/images/cake.png";
import Ca10 from "../assets/images/orange.png";
import PD1 from "../assets/images/product1.png";
import PD2 from "../assets/images/product2.png";
import PD3 from "../assets/images/product3.png";
import PD4 from "../assets/images/product4.png";
import PD5 from "../assets/images/product5.png";
import PD6 from "../assets/images/product6.png";
import PD7 from "../assets/images/product7.png";
import PD8 from "../assets/images/product8.png";
import PD9 from "../assets/images/product9.png";
import PD10 from "../assets/images/product10.png";

export const useProductStore = defineStore("Product_Store", {
  state: () => ({
    Promotions: [
      {
        Text: "Everyday Fresh & Clean with Our Products",
        // Img: "https://s3-alpha-sig.figma.com/img/de8c/488a/87b9ce16acd7436a6dec758331c840bc?Expires=1699833600&Signature=BopNMeaoYpayx-Epz2eU-MbKTcy37aptwt-6wMUbZ6Mt8k5wuNRsq-yfIYHMpIyAI0hFl6N~P2GQekhYEpysnvQ2tJebN~Omsv8lCoICbXONhWAd9iyfMQqvEjZ-74Eyi9DWiX8JQuclXSCY9zlrzedu2fwO8fJzbWF-zfAk49J9o3oRB3XUz9XXvAhPHQ5x7Eo5uzB9jluL1JzkmMzuYq8LRqBHJxwH3NBB3aoC5JmwL-~A1SfB6DRCUfElZSswO~7bGHfx5Q3zpV5d-t6xlkkc~EXCLGD0vRpoQSHe-8J9WS16pos4WUU-bYexswtrUJZMPcSwvtRGxu4DCUlKaA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
        Img: Pro1,
        bg: "rgba(240, 232, 213, 1)",
        btncolor: "rgba(59, 183, 126, 1)",
        TextBtn: "Shop Now",
      },
      {
        Text: "Make your Breakfast Healthy annd Easy",
        Img: Pro2,
        bg: "rgba(243, 232, 232, 1)",
        btncolor: "rgba(205, 50, 17, 1)",
        TextBtn: "Shop Now",
      },
      {
        Text: "The best Organic Products Online",
        // Img: "https://s3-alpha-sig.figma.com/img/4d69/6151/8879bc373bf5fcc1578bcec5172b087b?Expires=1699833600&Signature=Fcyz23Cuci2YfyswiwIYuvnXpqTqeT2BzsUhksKvplJbkgsGcaO0-X1M8nHVl6CDFfd2zHhxeXzTZjzCf45kWe6VcYwcgk3TodKvldeQ~xEuTUcQTvu03EaEqdVQ2c-eTZDcm8Y1uQElWeqsN7zLJng0njznWVkFu0AYde-dYfvJulOW7~CmtPCIZbiSXTzxwsS3t712VhAYvjRwMca1cViLQirep7rcRPdGz-WGUn8NVhD9HUzmf9PtXQoqL8-Oq3hiyxUfQ0meqDc594uZ2MGgnSZ6mfbvaHPxp845r4h7q87NCVXpYa8mku3sAD-2b4B1ME6uFa6nyJgggtEUbA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
        Img: Pro3,
        bg: "rgba(231, 234, 243, 1)",
        btncolor: "rgba(253, 192, 64, 1)",
        TextBtn: "Shop Now",
      },
    ],
    Categories: [
      {
        // Img: "https://s3-alpha-sig.figma.com/img/8370/e915/8a586f746c0b10b70cd405c8aa1f2038?Expires=1699228800&Signature=L-reokY4cdElwI8HHeS9iKW58ip98C93-H~HpTII~Px9MXnLDATcnx-ZaQv5AXB6weQwhTXCekkyWSSLxJGsBqOLWxlzhDKADaXO-4HoKz6q-crjH6nX6-XIW0HQzfmxFRIGb9NP6sxwik7gx5fDpOzQLeVu5U~Js6kcysvwNVBRf9g90BJBjOWxV6UyIVchOYCaRFZgvZv-pCGevQhQ0RzENRzyWu15Ps~xweWRVAFAqYQwSO~hQbFULB~4ohbZ9Zxu3sxuXEyWg8Tg8P3KWIzvM2J190-H2Gazbsy-scpr4-rsf9PXWPMCD~i62IEhAAo8xjJwj5yyDR-a-VY8LQ__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
        Img: Ca1,
        bg: "rgba(242, 253, 228, 1)",
        ItemName: "Burger",
        ItemNumber: "14 Items",
      },
      {
        // Img: "https://s3-alpha-sig.figma.com/img/fa19/6bce/6720167ebdfcf5d3f8a2d76053176f9a?Expires=1699833600&Signature=ReB-ACp4ZHwx-KnKawaftMI0r-4wHOzgkuQNvDz4gKr3pbU1DOV9wPzqVzD5xoIQky3NmxOgpyvHqgOf30GqOVYVTGqZ-fCf-GpU3a~qX6WyKTMC~J203nZHFVOPIlOKLkMv4p5uvu8GDKuiykrSKXm1pvM9gpltD6Rqi2-cv5qr3lFjfEPv4jy~5N8YXifYLUysVejDLfchKgSV8XqmwM4kBy2dYX97IbiXpXLKFd0meAuo41mKtF2zlnclc2I8boDAHrCvYz6SjNSr4GQgaXUeJVGX52NaqJ-5a6fQYDj6jVc7hPmNaryj7S4cwYB-tl2zT41u6sThXxLx-AsS1g__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
        Img: Ca2,
        bg: "rgba(255, 252, 235, 1)",
        ItemName: "Peach",
        ItemNumber: "17 Items",
      },
      {
        // Img: "https://s3-alpha-sig.figma.com/img/eb0a/46d6/bf3d30616b8cd69f4b03064fe254350c?Expires=1699833600&Signature=SVfj1ycsGcreHWOHTDYE7MakOwpk5lkKmu8TeP5AllFZB~RXeF3wduHLgtaBGjhQk~czlgDCh4yMXzttdFfSL19X0CDpGrMghsOsQd1cSUPSTwjcOh1BQgQF6qX7cj7wNsU4FYeQ8so92HtjVdm1mVcHvtxfjYntQlds7TB9eW9ZQJoKag~TWM6ocQBITJLLyKCivxYp2wgPSFCkriZnXiMXSUzSP2pTU3ynv4a9T7c6tgwax3s5tiXKx-gRKAkl3mdPpHa0qmxx8Gb-K0ksLWvzS4GRMfFnZw5SVCAiumSjvPfjPIhr3V~X6uzbw2qNyEaHuwM~4hXmEbZDneXykw__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
        Img: Ca3,
        bg: "rgba(236, 255, 236, 1)",
        ItemName: "Oganic Kiwi",
        ItemNumber: "21 Items",
      },
      {
        // Img: "https://s3-alpha-sig.figma.com/img/21b6/3a1e/f2a493eea176934bcab372692ab59a29?Expires=1699833600&Signature=FXFbsYqphIe1ipmFbHzTdjwe6oAZguBImTgw3rut6pjQxCr~gU~UdJYlygCK5Qh56~R38QKQxELvFkZW4tEvDcHH99ugN7vqkTTSnRqHi6YnsOGXCb01GQJHNqlwgC7P90-6VapunM6IlmDdcyMfh5LmOLdEDHyKx0nZct89zq1WlsOzSrxWqwWrhAvo3R5nQimGDSmCg5C7hdzeIYzGnYv9sQhZ4EF0HePgUbeoj8fNMiWbRX~h655bMFr8cVIXdVrJ7BEwE6B~EvVjYtrYC6T0sRaoGJGFcgpFY92t164x-LR6lVWmXPyU5cm7UgT425rOlQhe~vn20wdtZIRc4w__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
        Img: Ca4,
        bg: "rgba(254, 239, 234, 1)",
        ItemName: "Red Apple",
        ItemNumber: "68 Items",
      },
      {
        // Img: "https://s3-alpha-sig.figma.com/img/488c/b40d/98f6efd89c2347f8ab7f23b7757a7e2f?Expires=1699833600&Signature=RRKQtVEpA~7vCDr5cobXciLHTNELEC9v-hZDzZEj0rivcS~pgZaCrvu1lo-UJtaNgCqenuo-Fi7ZzxvFgNlUMAMdgeAT1eIkdyjO6aT-gV7wk-HV-b1TAf7XrcJE1aCiTp9gY8bz3pEnf6XKkqM6oSovCP4I~jBeCRJnRSrF49RpJBwhnfR5r-ixEwybyIxKc2WZ0ExyqatE-MpsfRMLXdh8jqmxwb64b1rRpH4GOlPvg0u2dgZlOud2DgBhKl1y6lW6i6sQ2UxtN2~m2Cf0aHvwuGHJ7anev1jDsIFLnDQg4w5iPTXnWRM7tTp1KpU0-3weVligqoHLjmAGV1kJBg__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
        Img: Ca5,
        bg: "rgba(255, 243, 235, 1)",
        ItemName: "Snack",
        ItemNumber: "34 Items",
      },
      {
        // Img: "https://s3-alpha-sig.figma.com/img/13f9/afc8/02816b515e817bcd88800c49b947f860?Expires=1699833600&Signature=YL1P41RPODYUqlRbRpFI7l5JafECERaPx7-jTsgY8LM-c-9bolTqwRx1J54YiYXXPlutJdIpZF4Nu~LKICq8khhHghdVH3unGdqcrj35Gny2QdsJC78L8UAZRHJ3eKzOJL-vopTA72V6FXAcf9PJLneQ78KPP72R~HywsPeLTlwxFzj5pZjTI-yeU1zDM~XwO9pTOebx5YDaLH9lQnGXR7PFw5CB79R9JqOzFpriNecpgrQNBIHGbtqo~XF8ENarO5s3~RJlXIUDuAEQkcPky-zwRsrngemqWzf1juegho4RXk3DcvOxhQFH7yQ~spK1El71NtKcAdzV0cSiZjlBEQ__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
        Img: Ca6,
        bg: "rgba(255, 243, 255, 1)",
        ItemName: "Black plum",
        ItemNumber: "25 Items",
      },
      {
        // Img: "https://s3-alpha-sig.figma.com/img/5e6d/35bc/cc6f73e5412576546dca6b013f4fc9c7?Expires=1699833600&Signature=J5bhwwHy-8EhZxf~pW2L9qcDo4RLXcvYDPCdDmOyBY~C3BUWWIc5Wn4KUAtXk2biIeJaZj~Dt0epPcSGz4Rgwcg2AkDQ65CYDztMsj9NKscS40nQVqoIQwIhYSufQdv8zkHFQYJ5htdr3ceMLGwdDyH~qe83FC40J~TtkcPJxjPfAQE8XnbrUox5ER0gS5ndWF02rxHBhdgKz~~HKAxzqmL-oRc1iDDD6VZj3ZFTnamSfk5PdeuhnAFCPRy6uvzZr2xiRSRyGjYsxbqv9gJS0UoUhfgfp3HCZ~smR-dQhoA2Ide4gpWwkzKAJdyb8gUg3ER7yj0joHqU7sklQzrWUg__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
        Img: Ca7,
        bg: "rgba(242, 252, 228, 1)",
        ItemName: "Vegetables",
        ItemNumber: "65 Items",
      },
      {
        // Img: "https://s3-alpha-sig.figma.com/img/0ed9/44fa/3bcccc269ae2cadb2fb25ac9b02ea29e?Expires=1699833600&Signature=JpBVjKtSL-91DazsiQO3MgkyvztdmXjSbYG51BReJcHZnW4KQ-BvsNH0KbpvM2K5KrpTPStIe~tLSVmAsmTKQqceGy4tMDiI8~tdkYHulh5vJmOgLLa3IAq~YB-ZffrX-0Wc2cI1twiQzjVGVhik5Hz1EYRuE4xAbzUdW5CFeiK9qN3NtJ9xpuAmJXOsUmUjgTtFYWcorjfpCKmVUkI-g7fwheaQZf8egCO8eaedzshVmprQw2D9KZWpvikTvkOeKg8zZezcDsCxbQ~K~AICT-Xp9dtb8-sTXzkHV0ckb~fEvd6QxbhYBYoVqU9Zs9aO-vdpwiG0QpmZZZLCkpAtDQ__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
        Img: Ca8,
        bg: "rgba(255, 252, 235, 1)",
        ItemName: "Headphone",
        ItemNumber: "33 Items",
      },
      {
        // Img: "https://s3-alpha-sig.figma.com/img/78c4/8886/688817c7c490b88407c4904743141184?Expires=1699833600&Signature=pg4YVVgnJVPU82pFrb5TZqIW86nanB5A2pL2q9iEpqZ8b99ZlW7MxslUGQ0DlGXb-7zRkzEbXgCj-~d-tTYqx5-QqQmg3iXAwjEv5ckj25lnw~mpt2k3X7eFwGUQo42XHSWKNeE1X3hCZOXH0BZAoxIz-Ks8lAJeZ7cLBZEH6xyVYxfQBxoR88F2A8c0BBLPjFgDzZxV0Rsbl4GMm8MYReGby0Z6MJFTHZqNhI4Y0o8cC0fUvN8RuWpvxdPr~mPMufJwPb4U9MeQusBPxo7tiExuix-HvpMNP7fzIAqtJzMIFKqF32trLoWTXFW99G0k-TuVIdRJdJehZIb9ISBbtQ__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
        Img: Ca9,
        bg: "rgba(242, 252, 228, 1)",
        ItemName: "Cake & Milk",
        ItemNumber: "54 Items",
      },
      {
        // Img: "https://s3-alpha-sig.figma.com/img/aadc/a20d/2ca905cbdfec3bf306fbe70e1ca34a8a?Expires=1699833600&Signature=UdhxWsqWNaFPVYRQR2BywbacMhq8bf1IKHxb9JMgBGKERxpzcPVzDRfozFq2CHgeR62jUwhPApqUiNlRxTrK-p9xFYxLUJEnCBUK~KZefSygBebL~AU-~BJ7njpLqN4UAmwIN~sCH5ugWqUUfP2HRdENjAEFzCqdG9XfWyGCwinAoSs4Nlky8wPdWo2YFTgw~H0jKvF4axGlNJvj2awW4-7t2F6OMUaoo3bNdmnlJvOmNVChiXOPrx1x7W~46GwXlUGsrsHYdW4JWrpLRuwKOC1gFW72hPaj~yITFMn5k3GGsDRBEpo5Uc9KKRwm2IilvuJ-Eo-uok4WmwouNwxPuw__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
        Img: Ca10,
        bg: "rgba(255, 243, 255, 1)",
        ItemName: "Orange",
        ItemNumber: "63 Items",
      },
    ],
    Product: [
      {
        id: "1",
        Value: "-17%",
        Bg_value: "rgba(59, 183, 126, 1)",
        // Img: "https://s3-alpha-sig.figma.com/img/17d8/db7f/3d627d5dff7a21f5589732970e0ecc60?Expires=1700438400&Signature=lbAQf1WGZ9xbKYvSowOyd7FiQxs2KwTahg4wKib~~04mjRZtpbYYHSxwICv0rDhKbfyFiPbvcd9ypsRHaVoWMnqmArO3u7lkpI2XuqnjLu0WVnGEGkyqM1OuiCVBby-r2mQ0EjYiBM2kHiq5tryyoJ9XqHVVxMVA0yAh0ZErkIGG8imBjQDvFmyKS7eoZBYS8kaI1CK348~IeLNLVDQTKpBDgF5-4yM8xPUyvsdSopCU-R5qP9~c0uWRT2JJbOx6FUYskAAVt5POVOhcSW5CVEsY2oigRpvGQQmH0gEZLL~nCZjbNMvTLmT9RyNGZXCfqba8gYRUehYbb12xaxok9Q__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
        Img: PD1,
        Title: "Seeds of Change Organic Quinoa, Brown, & Red Rice",
        Star: "",
        Supvalue: "$2.51",
        Subvalue: "$2.80",
        Bgbtn: "rgba(255, 255, 255, 1)",
        Borderbtn: "1px solid rgba(59, 183, 126, 1)",
        Text: "1",
        Arrow: "+",
      },
      {
        id: "2",
        Value: "Hot",
        Bg_value: "rgba(253, 110, 110, 1)",
        // Img: "https://s3-alpha-sig.figma.com/img/2460/9b48/1186872b4c861e65b3ad6f46536a194f?Expires=1700438400&Signature=AkJ~ST9RXdFK5p40QhQl1FmbYRaaD3BxHLRAfnjYXoCL5vUlw5NUrlANZrUnpAgOLN5VbuVFdJOksK5okKGlUSlfCSlFXGRuPnpfsYL9QAzPM~87CJCtPLe8Db5vnVQYqmL-4QqJtF6zhwhIyOQdsrTU0xpJnkUIEVhj3~QQ9sDq-p3BWofIohIlt5VPFec3nfhbrHi~4H~El9BA9Fpq3kPTAploU7ao8vk6XeZSPBncaSAfNZvXcbdPG7zJ50mkloN5mgSvfccqKXNOHPDt5BzGfyEBStJxU4Z8WasGm5IQ~qd7bPh1STjJZzoR~P7TSUtKXYw1ru1Bl644t7WDbQ__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
        Img: PD2,
        Title: "All Natural Itallan-Style Chicken Meatballs",
        Star: "",
        Supvalue: "$2.51",
        Subvalue: "$2.80",
        Bgbtn: "#DEF9EC",
        Borderbtn: "1px solid rgba(255, 255, 255, 1)",
        Text: "Add",
        Arrow: "+",
      },
      {
        id: "3",
        Value: "sale",
        Bg_value: "rgba(253, 192, 64, 1)",
        // Img: "https://s3-alpha-sig.figma.com/img/8b45/4a65/7d09e0d193461fe0cf5fe4d9cba8cad9?Expires=1700438400&Signature=kQKqjFrnyDNVCO903ScnzPa3OiBgrNhGWnjjfxxytF0xFTHzJAgnxMO32WYbXecjv6PjvjIkA~HLB7-fS8mRWYnWS1GZ8b9v6DodhKLs13Tc~5ULELQ6VD3PubWeEdSQGUGtN5YW11tBFrZOlvF0GtGzVrw~Og3SJ4qjEyPcA16U8wQc9ay0d4ipwI~YktnDE3HvQ32Bd3ZPCJmljkN24uJsp0vlVcoGi8cr0BuSVFtaMM3s0J-~DM8C8O0O3fgQ8j3kO768gXJFPTQic0onM9ftrn6jveQeuJd5fBjCO919trL73ErqJIygdulfKfzYJOJS4TiziCGbpAqWDu-J4w__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
        Img: PD3,
        Title: "Angli's Boomchickapop Sweet & Salty Kettle Core",
        Star: "",
        Supvalue: "$2.51",
        Subvalue: "$2.80",
        Bgbtn: "#DEF9EC",
        Borderbtn: "1px solid rgba(255, 255, 255, 1)",

        Text: "Add",
        Arrow: "+",
      },
      {
        id: "4",
        Value: "",
        Bg_value: "",
        // Img: "https://s3-alpha-sig.figma.com/img/40ab/8386/1edbcb39cf2b176a6b5084a096d0c9a4?Expires=1700438400&Signature=WKDQ~r2iTp6cHBRVoHMdTINAt7y77AQMJuphTYKrFSxL~4gg7P~t-63VY4Z4wQVm1jXibKP1gHInrFhknQvzPc6-qzOvgTfSSVuu4WKJm9haYip8atQom8QTZZ2DZBAX0NMZXWsCRW-rTXJd7YvMmqe2GKyVWVaGwaKl5K36FRxN03KXNxWhLDK6ys1~rRHLxu1TT8Nhp3ruAADQo2WiyhL1RiYyhExbsmoVJfLgaSyo1Tn8XqPC-fikV9dLFckgsnx6cqJnU0B7M4sdP03rTMYpRESySBuKv3ggMNjd4ZENWoR4mLy8n7Wlw5rAm~WkU58S80oXeL4RKjb7XtGiNQ__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
        Img: PD4,
        Title: "Foster Farms Takeout Crispy Classic Buffalo Wings",
        Star: "",
        Supvalue: "$2.51",
        Subvalue: "$2.80",
        Bgbtn: "#DEF9EC",
        Borderbtn: "1px solid rgba(255, 255, 255, 1)",

        Text: "Add",
        Arrow: "+",
      },
      {
        id: "5",
        Value: "",
        Bg_value: "",
        // Img: "https://s3-alpha-sig.figma.com/img/2d48/0a8f/210cdb0f5871f9d6dc633450452ab720?Expires=1700438400&Signature=CYwkEnpONmOQTbnAKDN8WMIQthSNraenRwja93PKXHpZmSjet18~0igrwcVfAuvSJMRC7fICPttRmNRa7FjnOpmLLyO8duBGtuwIhV7xaboYxtnUBjyHPO7MlCNUHdIQ8Ny8j0hSsUSKmTSv077cgAgqdAc8kukJr6wr18f~rtYmnQGfiSZVZ0CNRQ3oJQrlGNJ5K2KR7B8lVy9f4rNXZO8YHAgq7TGf8Sktzj3PyFO289EFK~BqV-eTBji5P9os9ddaUe66Oy3hrhJ7RNUOtbbaCmoj~n5SGejqgW5BXqcZYE9a4QfV6k0cxEAVn0AnKvymwi1FhpZWOAOBPNExog__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
        Img: PD5,
        Title: "Blue Diamond Aimonds Lightly Salted Vegetables",
        Star: "",
        Supvalue: "$2.51",
        Subvalue: "$2.80",
        Bgbtn: "#DEF9EC",
        Borderbtn: "1px solid rgba(255, 255, 255, 1)",

        Text: "Add",
        Arrow: "+",
      },
      {
        id: "6",
        Value: "",
        Bg_value: "",
        // Img: "https://s3-alpha-sig.figma.com/img/4c35/37e0/b383c32aa0cf53ae7651240f5bb90bbf?Expires=1700438400&Signature=LWWupW3sHrZV3K4V4GFxtcAqQu~nmbCLy6H8XkNyhHoAEoE3nu9mp9QdfziqJMAMS~W1B4d6QiDpcq2HPQ0y28jggcmwf1UPOjmj21FyX~DJ6urMCPr5sV6Bk1TVeLc7Y5U64bXybmM1rVgq4dEhUDhYiVtJp~ZTk1TeINfyGW35N~y6er1R-Sjo-HZWddzR6iOypwjOY4wto5G0DhxknGkRd2CfVnW9AA7d1ItWIw8h3pux2u2QQ4IX8KJGGaWQrs-3sm-z-g87LCd-2TIjJ1kID8k3p9sh4HR04L6FuCECEDove-P8B1JP-d2eBzZvaQXLejKiLGYRGb7ghGVuCw__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
        Img: PD6,
        Title: "Chobanl Complete Vanilla Greek Yogurt",
        Star: "",
        Supvalue: "$2.51",
        Subvalue: "$2.80",
        Bgbtn: "#DEF9EC",
        Borderbtn: "1px solid rgba(255, 255, 255, 1)",

        Text: "Add",
        Arrow: "+",
      },
      {
        id: "7",
        Value: "sale",
        Bg_value: "rgba(253, 192, 64, 1)",
        // Img: "https://s3-alpha-sig.figma.com/img/2190/48fe/84dbf34790f69cce601604ba8d38d582?Expires=1700438400&Signature=LSldov3zHQVrAC2yL6tRp9LZIax1bfNkBvgbNa7w~-Kzzvs5-gAVAqCqGQncLri3jNA0u~zGxjxpK3DxyxV0at-87RDoCoD8kIZiIS9TdZsWEEmm7eJ6qf4UCBm0K-K0TkVNACygwg-Wltj2iyQ5W4L3yNoO5QCAkpMi9Bc6L1FM1DzIlxvcR22DDylE0JmxcQA3yGCLjOQpPcEjV3HntpC1a1osHskxqtBXw6jU4tqczN~vfLKdnosGHbuWX3OsO2dqAIz2kVoXFmWLA0GSOoySmk5axAJjoE8YBhZnz1VApaA~ITSQkeR8KShtH8FdFtiWTAzl8gJ4tvf~SCwAGA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
        Img: PD7,
        Title: "Canada Dry Ginger Ale - 2 L Bottle - 200ml - 400g",
        Star: "",
        Supvalue: "$2.51",
        Subvalue: "$2.80",
        Bgbtn: "#DEF9EC",
        Borderbtn: "1px solid rgba(255, 255, 255, 1)",
        Text: "Add",
        Arrow: "+",
      },
      {
        id: "8",
        Value: "",
        Bg_value: "",
        // Img: "https://s3-alpha-sig.figma.com/img/b276/d8b7/833567cc5ca946f1cf51704fd32be2e4?Expires=1700438400&Signature=L8v0C~RyrwA1ncmulknWS-zUeJqPYhnXhKovfc7i-24J2t3pDn6FGUD6k3pAivs2P341oHGb0LxPl5QqFGy~Jduwiibtwxan3zcOAPS6WxRaWahLotkVX0ElGbtTw544MwuUHXznLmUZw2cXDQkbE1AYZ26DZo1vASnlIolZGj3IeKUGLoeSs12R~QoKOqbWF00I5mMvZEJLID-qcwsiZz38yohs~1xq5k2wXbwG0qdKLwPQCnEXadDCC8j6qPzAWchr7EDP4ZbhKw7vobgukrP3KbWrwNu5NC0MOpM~PuUNPwRxY~AjS-pZUv1P3PynDnXCoNJ-p9KKsEfkpqcx4g__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
        Img: PD8,
        Title: "Encore Seafoods Stuffed Alaskan Salman",
        Star: "",
        Supvalue: "$2.51",
        Subvalue: "$2.80",
        Bgbtn: "#DEF9EC",
        Borderbtn: "1px solid rgba(255, 255, 255, 1)",
        Text: "Add",
        Arrow: "+",
      },
      {
        id: "9",
        Value: "",
        Bg_value: "",
        // Img: "https://s3-alpha-sig.figma.com/img/53b7/049c/d4d87292c3766771cdc858ab456c1e20?Expires=1700438400&Signature=bBUzfRRkAYavGDecj7J7Z7KrRkfrJ~cUlX9jsUrLUA-CqmNq~pabnnzAwq7Y-vHQQt7tpoRPcCQ0lzQzk0ADJOGCnqCnHTjj3EklkqZ~v4o3jlrwmmtqhe6fwqOo-wE0l3ix6MHf3vggfYZewksCovOcR5ZkkmpRQlmDhEHez56vCUY54lJ2mOzGOo98xz72fQEMkWPwOQKHwO-v3KHKgUJIxEaNX~GzGiZCYxw-qvbNLUVDx2BqKB~BQZ5ZHBg1BI619mTnDuCbgX3aqi-bdsP-q~JiNyto-CGQAwlnvh~tj5ZU0kl2SfSFpYYvaQGv5JCJhTvBcrLA3zOpgQ3GlQ__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
        Img: PD9,
        Title: "Gorton's Beer Battered Fish Fillets with solf paper",
        Star: "",
        Supvalue: "$2.51",
        Subvalue: "$2.80",
        Bgbtn: "#DEF9EC",
        Borderbtn: "1px solid rgba(255, 255, 255, 1)",
        Text: "Add",
        Arrow: "+",
      },
      {
        id: "10",
        Value: "Hot",
        Bg_value: "rgba(253, 110, 110, 1)",
        // Img: "https://s3-alpha-sig.figma.com/img/6667/38db/f36fd0ac0722f68e84acd3769588855f?Expires=1700438400&Signature=Qc17jJ~cvda~4ucerYC1hG0XHZ5HupaIHl6PKQ-zfSebxiohtBrxr3pNn38TCrRxjX9UZvFt7TveGV6sVXC68cvcKchSrBf8bIvoQu9-7WbYnz-YBzw4Lvk5wuiHcx1SyMddxpscf5gs6mORZgG1rd~V8pKas~J0g7kiJ4t8CTxeBWzgkRgHqQZnxcFHoKs8Yl4LZ-4kL~qUpPgCG0tCbbP41XJNeqcPNwuTSZYmleb1Xn-MdMunMvFYKL-k9hoyz~FyOVOBLAi0h7Rh-nU7lHmD7dmDtBnhQQJ-rIKoY9RkUnOQj44YNTFEYR70ci0gg466~Ufjf-8mjEy9CRxnJg__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
        Img: PD10,
        Title: "Haagen-Dazs Caramel Cone Ice Cream Ketchup",
        Star: "",
        Supvalue: "$2.51",
        Subvalue: "$2.80",
        Bgbtn: "#DEF9EC",
        Borderbtn: "1px solid rgba(255, 255, 255, 1)",
        Text: "Add",
        Arrow: "+",
      },
    ],
  }),

  getters: {
    doublCount: (state) => state.count,
  },

  // actions: {
  //   fetchCards() {
  //     const Cards = new Promise((resolve) => {
  //       setTimeout(() => {
  //         resolve([]);
  //       }, 3000);
  //     }).then((Cards) => (this.Cards = Cards));
  //   },
  // },
});
