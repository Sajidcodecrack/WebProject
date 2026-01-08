const express = require("express");
const router = express.Router();

const auth = require("../middleware/authMiddleware");
const roleAuth = require("../middleware/roleAuth");
const { verifyStudent } = require("../controllers/adminController");

// Admin verifies student
router.patch("/verify/:userId", auth, roleAuth("admin"), verifyStudent);

module.exports = router;
