const express = require("express");
const auth = require("../middleware/authMiddleware");
const { createGroup, joinGroup, leaveGroup, removeMember, } = require("../controllers/groupController");

const router = express.Router();

router.post("/", auth, createGroup);
router.post("/:id/join", auth, joinGroup);
router.post("/:id/leave", auth, leaveGroup);        // ✅ Task 6
router.post("/:id/remove", auth, removeMember);     // ✅ Task 6


module.exports = router;
