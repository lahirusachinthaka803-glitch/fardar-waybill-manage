oexport default async function handler(req, res) {
  if (req.method === 'POST') {
    // Fardar sends current_status, waybill_id, and last_update_time
    const { waybill_id, current_status, last_update_time } = req.body || {};

    // Response structure expected by Fardar
    return res.status(200).json({
      status: "success",
      received: {
        waybill_id,
        current_status,
        last_update_time
      }
    });
  }

  return res.status(200).json({ status: "active", message: "Webhook is working!" });
}
