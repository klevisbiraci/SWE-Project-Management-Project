document.addEventListener("DOMContentLoaded", () => {
  let cartCount = 0;
  const cartDisplay = document.getElementById("cart");
  const addToCartButtons = document.querySelectorAll(".add-to-cart");
  const currencySelector = document.getElementById("currency");
  const languageSelector = document.getElementById("language");
  const categoryDropdown = document.getElementById("categoryDropdown");

  const exchangeRates = {
    ALL: 1,
    EUR: 0.0094,
    USD: 0.0103
  };

  const translations = {
    sq: {
      choose: "Zgjidh",
      protection: "MBROJTJEN NDAJ DIELLIT",
      fits_skin: "që i përshtatet lëkurës tënde",
      offer_products: "Produkte në ofertë",
      spring_offers: "OFERTAT E PRANVERËS",
      add_to_cart: "Shto në shportë",
      about_us: "Rreth nesh",
      about_text: "FarmaOn është farmacia juaj online me produkte cilësore dhe shërbim të besueshëm.",
      contact_us: "Na kontaktoni",
      social: "Rrjetet sociale"
    },
    en: {
      choose: "Choose",
      protection: "SUN PROTECTION",
      fits_skin: "that fits your skin",
      offer_products: "Products on Offer",
      spring_offers: "SPRING OFFERS",
      add_to_cart: "Add to Cart",
      about_us: "About Us",
      about_text: "FarmaOn is your trusted online pharmacy with quality products.",
      contact_us: "Contact Us",
      social: "Social Media"
    }
  };

  // Add to cart
  addToCartButtons.forEach(button => {
    button.addEventListener("click", () => {
      cartCount++;
      cartDisplay.textContent = `Cart (${cartCount})`;
    });
  });

  // Currency switch
  currencySelector.addEventListener("change", () => {
    const selected = currencySelector.value;
    const rate = exchangeRates[selected];
    document.querySelectorAll(".product-card").forEach(card => {
      const basePrice = parseFloat(card.getAttribute("data-price"));
      const converted = (basePrice * rate).toFixed(2);
      card.querySelector(".price").textContent = `${converted} ${selected}`;
    });
  });

  // Language switch
  languageSelector.addEventListener("change", () => {
    const lang = languageSelector.value;
    document.querySelectorAll("[data-i18n]").forEach(el => {
      const key = el.getAttribute("data-i18n");
      el.textContent = translations[lang][key];
    });
  });

  // Category filter
  categoryDropdown.addEventListener("change", () => {
    const selected = categoryDropdown.value;
    document.querySelectorAll(".product-card").forEach(card => {
      const cat = card.getAttribute("data-category");
      card.style.display = selected === "all" || selected === cat ? "block" : "none";
    });
  });
});
