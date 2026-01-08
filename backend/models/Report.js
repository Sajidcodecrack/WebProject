const mongoose = require("mongoose");

module.exports = mongoose.model("Report",
  new mongoose.Schema({
    reportedBy: { type: mongoose.Schema.Types.ObjectId, ref: "User" },
    targetType: String,
    targetId: String,
    reason: String
  })
);
