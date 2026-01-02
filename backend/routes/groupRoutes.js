const express = require("express");
const auth = require("../middleware/authMiddleware");
const { createGroup, joinGroup } = require("../controllers/groupController");

const router = express.Router();

router.post("/", auth, createGroup);
router.post("/:id/join", auth, joinGroup);

module.exports = router;
