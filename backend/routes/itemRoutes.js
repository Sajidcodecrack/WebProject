const express = require("express");
const auth = require("../middleware/authMiddleware");
const { createItem, getItems } = require("../controllers/itemController");

const router = express.Router();

router.post("/", auth, createItem);
router.get("/", auth, getItems);

module.exports = router;
