const express = require("express");
const auth = require("../middleware/authMiddleware");
const roleAuth = require("../middleware/roleAuth");
const {
  createItem,
  getItems,
  updateItem,
  deleteItem
} = require("../controllers/itemController");

const router = express.Router();

// Create item (any logged-in user)
router.post("/", auth, createItem);
// Get items
router.get("/", auth, getItems);
// Update item
router.put("/:id", auth, updateItem);

// Delete item (ADMIN ONLY)
router.delete("/:id", auth, roleAuth("admin"), deleteItem);
module.exports = router;
